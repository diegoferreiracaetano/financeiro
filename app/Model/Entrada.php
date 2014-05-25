<?php
App::uses('AppModel', 'Model');
/**
 * Entrada Model
 *
 * @property Franquias $Franquias
 * @property Contas $Contas
 */
class Entrada extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'franquias_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Franquia' => array(
			'className' => 'Franquia',
			'foreignKey' => 'franquias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Conta' => array(
			'className' => 'Conta',
			'foreignKey' => 'contas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
