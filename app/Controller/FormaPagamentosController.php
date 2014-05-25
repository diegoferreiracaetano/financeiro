<?php
App::uses('AppController', 'Controller');
/**
 * FormaPagamentos Controller
 *
 * @property FormaPagamento $FormaPagamento
 * @property PaginatorComponent $Paginator
 */
class FormaPagamentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormaPagamento->recursive = 0;
		$this->set('formaPagamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormaPagamento->exists($id)) {
			throw new NotFoundException(__('Invalid forma pagamento'));
		}
		$options = array('conditions' => array('FormaPagamento.' . $this->FormaPagamento->primaryKey => $id));
		$this->set('formaPagamento', $this->FormaPagamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormaPagamento->create();
			if ($this->FormaPagamento->save($this->request->data)) {
			$this->Session->setFlash(__($this->msgGravacaoSucesso), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__($this->msgGravacaoError), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormaPagamento->exists($id)) {
			throw new NotFoundException(__('Invalid forma pagamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FormaPagamento->save($this->request->data)) {
			$this->Session->setFlash(__($this->msgGravacaoSucesso), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__($this->msgGravacaoError), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
				));
			}
		} else {
			$options = array('conditions' => array('FormaPagamento.' . $this->FormaPagamento->primaryKey => $id));
			$this->request->data = $this->FormaPagamento->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FormaPagamento->id = $id;
		if (!$this->FormaPagamento->exists()) {
			throw new NotFoundException(__('Invalid forma pagamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FormaPagamento->delete()) {
		$this->Session->setFlash(__($this->msgExclusaoSucesso), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-success'
				));
		} else {
			$this->Session->setFlash(__($this->msgExclusaoError), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
			));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/**
	 * 	Diego Ferreira Caetano
	 *	@param int $id 
	 *	@return void
	 */
	
	public function listarPagamentos($id = null,$valor){
		
		if (!$this->FormaPagamento->exists($id)) {
			throw new NotFoundException(__('Invalid forma pagamento'));
		}
		$options = array('conditions' => array('FormaPagamento.' . $this->FormaPagamento->primaryKey => $id));
		$array_formas_pagamentos = $this->FormaPagamento->find('first', $options);
		$array_pagamentos = array();
		
		$valor = (double)$valor;
		
		if(is_numeric($valor)){
			foreach ($array_formas_pagamentos as $formas_pagamentos) {
				if(strpos($formas_pagamentos['descricao'],'/')){
					
					$array_dias = explode('/', $formas_pagamentos['descricao']);
					
					if(count($array_dias) == $formas_pagamentos['quantidade_parcelas']){
						
						foreach ($array_dias as $key => $dias) {
							if(is_int( (int) $dias)){
								$array_pagamentos[$key]['descricao'] = 'Parcela '.($key+1).'/'.$formas_pagamentos['quantidade_parcelas'];
								$array_pagamentos[$key]['data_emissao'] = date('Y-m-d');
								$array_pagamentos[$key]['data_vencimento'] = date('Y-m-d',strtotime('+'.$dias.' days',strtotime(date('Y-m-d'))));
								$array_pagamentos[$key]['valor'] = round(($valor/$formas_pagamentos['quantidade_parcelas']),2);
							}
						}
					}
				}
			}
		}
		
		$this->set('formaPagamentos', $array_pagamentos);
		
		   $this->layout = 'ajax';
	}
}
