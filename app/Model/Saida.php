<?php
App::uses('AppModel', 'Model');
/**
 * Saida Model
 *
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
		'Despesa' => array(
			'className' => 'Despesa',
			'foreignKey' => 'despesas_id',
			'conditions' => '',
			'fields' => 'Despesa.id,Despesa.descricao',
			'order' => ''
		),
		'FormaPagamento' => array(
			'className' => 'FormaPagamento',
			'foreignKey' => 'forma_pagamentos_id',
			'conditions' => '',
			'fields' => 'FormaPagamento.id,FormaPagamento.descricao',
			'order' => ''
		),
		'Cedente' => array(
			'className' => 'Cedente',
			'foreignKey' => 'cedentes_id',
			'conditions' => '',
			'fields' => 'Cedente.id,Cedente.nome',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => '',
			'conditions' => 'Status.id = (SELECT 
				CASE 
				WHEN Saida.data_pagamento IS NOT NULL THEN 3
				WHEN DATEDIFF(CURRENT_DATE(),Saida.data_vencimento) > 0 THEN 2
				WHEN DATEDIFF(CURRENT_DATE(),Saida.data_vencimento) > -7 THEN 4
				ELSE 1
				END)',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	public function getTotalSaidas(){
		$array_dados = $this->query('SELECT SUM(valor) as total FROM saidas where data_pagamento IS NOT NULL');
		return $array_dados[0][0];		
	}
}
