<?php
App::uses('AppModel', 'Model');
/**
 * Pagamento Model
 *
 * @property Entradas $Entradas
 * @property Status $Status
 */
class Pagamento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'entradas_id' => array(
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
		'Entrada' => array(
			'className' => 'Entrada',
			'foreignKey' => 'entradas_id',
			'conditions' => '',
			'fields' => array('Entrada.id','Entrada.descricao'),
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => '',
			'conditions' => 'Status.id = (SELECT 
				CASE 
				WHEN Pagamento.data_pagamento IS NOT NULL THEN 3
				WHEN DATEDIFF(CURRENT_DATE(),Pagamento.data_vencimento) > 0 THEN 2
				WHEN DATEDIFF(CURRENT_DATE(),Pagamento.data_vencimento) > -7 THEN 4
				WHEN Pagamento.status_id IS NULL THEN 1
				ELSE Pagamento.status_id 
				END)',
			'fields' => '',
			'order' => ''
		)
	);
}
