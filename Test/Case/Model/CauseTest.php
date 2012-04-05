<?php
App::uses('Cause', 'Model');

/**
 * Cause Test Case
 *
 */
class CauseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cause', 'app.devices_problem', 'app.causes_devices_problem', 'app.diagnostic', 'app.causes_diagnostic');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cause = ClassRegistry::init('Cause');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cause);

		parent::tearDown();
	}

}
