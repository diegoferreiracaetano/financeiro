<?php
App::uses('AppModel', 'Model');
/**
 * Franquia Model
 *
 * @property Clientes $Clientes
 */
class Franquia extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'clientes_id',
			'conditions' => '',
			'fields' => array('Cliente.id','Cliente.nome'),
			'order' => ''
		)
	);
}
