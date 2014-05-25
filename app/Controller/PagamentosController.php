<?php
App::uses('AppController', 'Controller');
/**
 * Pagamentos Controller
 *
 * @property Pagamento $Pagamento
 * @property PaginatorComponent $Paginator
 */
class PagamentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $paginate = array(
        'order' => array(
            'Pagamento.id' => 'asc'
        )
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pagamento->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('pagamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pagamento->exists($id)) {
			throw new NotFoundException(__('Invalid pagamento'));
		}
		$options = array('conditions' => array('Pagamento.' . $this->Pagamento->primaryKey => $id));
		$this->set('pagamento', $this->Pagamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pagamento->create();
			if ($this->Pagamento->save($this->request->data)) {
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
		
		$entradas = $this->Pagamento->Entrada->find('list',array('fields' => array('Entrada.id')));
		$status = $this->Pagamento->Status->find('list',array('fields' => array('Status.descricao')));
		$this->set(compact('status', 'entradas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pagamento->exists($id)) {
			throw new NotFoundException(__('Invalid pagamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pagamento->save($this->request->data)) {
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
			$options = array('conditions' => array('Pagamento.' . $this->Pagamento->primaryKey => $id));
			$this->request->data = $this->Pagamento->find('first', $options);
		}
		$entradas = $this->Pagamento->Entrada->find('list');
		$status = $this->Pagamento->Status->find('list',array('fields' => array('Status.descricao')));
		$this->set(compact('entradas', 'status'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pagamento->id = $id;
		if (!$this->Pagamento->exists()) {
			throw new NotFoundException(__('Invalid pagamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pagamento->delete()) {
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
	
	public function excel(){
		$this->Pagamento->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('pagamentos', $this->Paginator->paginate());
	}
}
