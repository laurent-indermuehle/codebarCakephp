<?php
App::uses('CausesDiagnostic', 'Model');

/**
 * CausesDiagnostic Test Case
 *
 */
class CausesDiagnosticTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.causes_diagnostic', 'app.diagnostic', 'app.cause', 'app.devices_problem', 'app.causes_devices_problem');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CausesDiagnostic = ClassRegistry::init('CausesDiagnostic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CausesDiagnostic);

		parent::tearDown();
	}

}
