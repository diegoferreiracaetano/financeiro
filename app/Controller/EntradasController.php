<?php
App::uses('AppController', 'Controller');
App::uses('Pagamento', 'Model');
/**
 * Entradas Controller
 *
 * @property Entrada $Entrada
 * @property PaginatorComponent $Paginator
 */
class EntradasController extends AppController {

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
		$this->Entrada->recursive = 0;
		$this->set('entradas', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Entrada->exists($id)) {
			throw new NotFoundException(__('Invalid entrada'));
		}
		$options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
		$this->set('entrada', $this->Entrada->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Entrada->create();
			if ($this->Entrada->save($this->request->data)) {

				$array_dados = array();
				$erro = 0;

				foreach ($this->request->data['Pagamento'] as $key_pagamento => $pagamento) {
					foreach ($pagamento as $key => $valores) {
						$array_dados[$key]['Pagamento']['entradas_id'] = $this->Entrada->id;
						$array_dados[$key]['Pagamento'][$key_pagamento] = $valores;
					}
				}

				foreach ($array_dados as $dados) {					
					$Pagamento = new Pagamento();
					$Pagamento->create();
					if(!$Pagamento->save($dados)){
						$erro +1;
					}
				}

				if($erro == 0){
					$this->Session->setFlash(__($this->msgGravacaoSucesso), 'alert', array(
						'plugin' => 'BoostCake',
						'class' => 'alert-success'
						));
						return $this->redirect(array('controller'=>'pagamentos','action' => 'index'));
				}else{
					$this->Session->setFlash(__($this->msgGravacaoError), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
				}

			} else {
				$this->Session->setFlash(__($this->msgGravacaoError), 'alert', array(
					'plugin' => 'BoostCake',
					'class' => 'alert-danger'
					));
			}
		}
		$forma_pagamentos = $this->Entrada->FormaPagamento->find('list',array('fields' => array('FormaPagamento.descricao')));
		$franquias = $this->Entrada->Franquia->find('list',array('fields' => array('Franquia.nome')));
		$contas = $this->Entrada->Conta->find('list',array('fields' => array('Conta.nome')));
		$this->set(compact('forma_pagamentos','franquias', 'contas'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Entrada->exists($id)) {
			throw new NotFoundException(__('Invalid entrada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entrada->save($this->request->data)) {
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
			$options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
			$this->request->data = $this->Entrada->find('first', $options);
		}
		$forma_pagamentos = $this->Entrada->FormaPagamento->find('list',array('fields' => array('FormaPagamento.descricao')));
		$franquias = $this->Entrada->Franquia->find('list',array('fields' => array('Franquia.nome')));
		$contas = $this->Entrada->Conta->find('list',array('fields' => array('Conta.nome')));
		$this->set(compact('franquias', 'contas'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Entrada->id = $id;
		if (!$this->Entrada->exists()) {
			throw new NotFoundException(__('Invalid entrada'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Entrada->delete()) {
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
}
