<?php
App::uses('Cedente', 'Model');

/**
 * Cedente Test Case
 *
 */
class CedenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cedente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cedente = ClassRegistry::init('Cedente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cedente);

		parent::tearDown();
	}

}
