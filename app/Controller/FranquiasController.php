<?php
App::uses('AppController', 'Controller');
/**
 * Franquias Controller
 *
 * @property Franquia $Franquia
 * @property PaginatorComponent $Paginator
 */
class FranquiasController extends AppController {

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
		$this->Franquia->recursive = 0;
		$this->set('franquias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Franquia->exists($id)) {
			throw new NotFoundException(__('Invalid franquia'));
		}
		$options = array('conditions' => array('Franquia.' . $this->Franquia->primaryKey => $id));
		$this->set('franquia', $this->Franquia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Franquia->create();
			if ($this->Franquia->save($this->request->data)) {
				$this->Session->setFlash(__('The franquia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The franquia could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Franquia->Cliente->find('list',array('fields' => array('Cliente.nome')));
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Franquia->exists($id)) {
			throw new NotFoundException(__('Invalid franquia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Franquia->save($this->request->data)) {
				$this->Session->setFlash(__('The franquia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The franquia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Franquia.' . $this->Franquia->primaryKey => $id));
			$this->request->data = $this->Franquia->find('first', $options);
		}
		$clientes = $this->Franquia->Cliente->find('list',array('fields' => array('Cliente.nome')));
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Franquia->id = $id;
		if (!$this->Franquia->exists()) {
			throw new NotFoundException(__('Invalid franquia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Franquia->delete()) {
			$this->Session->setFlash(__('The franquia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The franquia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
