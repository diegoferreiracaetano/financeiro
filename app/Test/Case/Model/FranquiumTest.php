<?php
App::uses('Franquium', 'Model');

/**
 * Franquium Test Case
 *
 */
class FranquiumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Franquium = ClassRegistry::init('Franquium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Franquium);

		parent::tearDown();
	}

}
