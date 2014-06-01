<?php
App::uses('AppModel', 'Model');
/**
 * Pagamento Model
 *
 * @property Entradas $Entradas
 * @property Entradas $Franquias
 * @property Status $Status
 */
class Pagamento extends AppModel {
	
	public $name = 'Pagamento';

/**
 * Validation rules
 *
 * @var array
 */
	/*public $validate = array(
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
	);*/

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
		'Franquia' => array(
			'className' => 'Franquia',
			'foreignKey' => '',
			'conditions' => 'Franquia.id = Entrada.franquias_id ',
			'fields' => '',
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
				ELSE 1
				END)',
			'fields' => '',
			'order' => ''
		)
	);
	
/**
 * Relatórios
 */	
 public function getTotalEntradas(){
 
 	$array_dados =  $this->query('SELECT sum(valor) as total from pagamentos where data_pagamento IS NOT NULL');
 	return $array_dados[0][0];	
 }
	
}
