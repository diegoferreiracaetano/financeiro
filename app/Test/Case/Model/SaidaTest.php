<?php
App::uses('Saida', 'Model');

/**
 * Saida Test Case
 *
 */
class SaidaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.saida',
		'app.status',
		'app.despesas',
		'app.forma_pagamentos',
		'app.cedentes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Saida = ClassRegistry::init('Saida');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Saida);

		parent::tearDown();
	}

}
