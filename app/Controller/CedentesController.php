<?php
App::uses('AppController', 'Controller');
/**
 * Cedentes Controller
 *
 * @property Cedente $Cedente
 * @property PaginatorComponent $Paginator
 */
class CedentesController extends AppController {

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
		$this->Cedente->recursive = 0;
		$this->set('cedentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cedente->exists($id)) {
			throw new NotFoundException(__('Invalid cedente'));
		}
		$options = array('conditions' => array('Cedente.' . $this->Cedente->primaryKey => $id));
		$this->set('cedente', $this->Cedente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cedente->create();
			if ($this->Cedente->save($this->request->data)) {
				$this->Session->setFlash(__('The cedente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedente could not be saved. Please, try again.'));
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
		if (!$this->Cedente->exists($id)) {
			throw new NotFoundException(__('Invalid cedente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cedente->save($this->request->data)) {
				$this->Session->setFlash(__('The cedente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cedente.' . $this->Cedente->primaryKey => $id));
			$this->request->data = $this->Cedente->find('first', $options);
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
		$this->Cedente->id = $id;
		if (!$this->Cedente->exists()) {
			throw new NotFoundException(__('Invalid cedente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cedente->delete()) {
			$this->Session->setFlash(__('The cedente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cedente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
