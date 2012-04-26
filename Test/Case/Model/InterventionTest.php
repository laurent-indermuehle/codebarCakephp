<?php
App::uses('Intervention', 'Model');

/**
 * Intervention Test Case
 *
 */
class InterventionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.intervention');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Intervention = ClassRegistry::init('Intervention');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Intervention);

		parent::tearDown();
	}

	public function testgetDate() {
		$result = $this->Intervention->getDate('1', '1');
		$expected = "2005-10-21 11:57:25";
		$this->assertEquals($expected, $result);
	}

}
