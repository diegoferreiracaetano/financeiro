<?php
/**
 * EntradaFixture
 *
 */
class EntradaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'franquias_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'contas_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor_total' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_entradas_franquias1_idx' => array('column' => 'franquias_id', 'unique' => 0),
			'fk_entradas_contas1_idx' => array('column' => 'contas_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'franquias_id' => 1,
			'contas_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'valor_total' => 1
		),
	);

}
