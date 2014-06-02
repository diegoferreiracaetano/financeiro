<?php
App::uses('AppController', 'Controller');
App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');
/**
 * Saidas Controller
 *
 * @property Saida $Saida
 * @property PaginatorComponent $Paginator
 */
class SaidasController extends AppController {

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
		CakeNumber::addFormat('BRL', array('before' => 'R$', 'thousands' => '.', 'decimals' => ','));
		$this->Saida->recursive = 0;
		$this->set('saidas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Saida->exists($id)) {
			throw new NotFoundException(__('Invalid saida'));
		}
		$options = array('conditions' => array('Saida.' . $this->Saida->primaryKey => $id));
		$this->set('saida', $this->Saida->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Saida->create();
			if ($this->Saida->save($this->request->data)) {
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
		$despesas = $this->Saida->Despesa->find('list',array('fields' => array('Despesa.descricao')));
		$forma_pagamentos = $this->Saida->FormaPagamento->find('list',array('fields' => array('FormaPagamento.descricao')));
		$cedentes = $this->Saida->Cedente->find('list',array('fields' => array('Cedente.nome')));
		$franquias = $this->Saida->Franquia->find('list',array('fields' => array('Franquia.nome')));
		$this->set(compact('statuses', 'despesas', 'forma_pagamentos', 'cedentes','franquias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Saida->exists($id)) {
			throw new NotFoundException(__('Invalid saida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Saida->save($this->request->data)) {
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
			$options = array('conditions' => array('Saida.' . $this->Saida->primaryKey => $id));
			$this->request->data = $this->Saida->find('first', $options);
		}
		$statuses = $this->Saida->Status->find('list');
		$despesas = $this->Saida->Despesa->find('list',array('fields' => array('Despesa.descricao')));
		$formaPagamentos = $this->Saida->FormaPagamento->find('list');
		$cedentes = $this->Saida->Cedente->find('list',array('fields' => array('Cedente.nome')));
		$franquias = $this->Saida->Franquia->find('list',array('fields' => array('Franquia.nome')));
		$this->set(compact('statuses', 'despesas', 'formaPagamentos', 'cedentes','franquias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Saida->id = $id;
		if (!$this->Saida->exists()) {
			throw new NotFoundException(__('Invalid saida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Saida->delete()) {
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
