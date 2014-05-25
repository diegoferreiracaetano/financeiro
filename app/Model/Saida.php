<?php
App::uses('AppModel', 'Model');
/**
 * Saida Model
 *
 * @property Status $Status
 * @property Despesa $Despesa
 * @property FormaPagamento $FormaPagamento
 * @property Cedente $Cedente
 */
class Saida extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'despesas_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'forma_pagamentos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cedentes_id' => array(
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
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Despesa' => array(
			'className' => 'Despesa',
			'foreignKey' => 'despesas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FormaPagamento' => array(
			'className' => 'FormaPagamento',
			'foreignKey' => 'forma_pagamentos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cedente' => array(
			'className' => 'Cedente',
			'foreignKey' => 'cedentes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
