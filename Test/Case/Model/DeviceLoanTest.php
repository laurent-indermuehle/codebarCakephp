<?php
App::uses('DeviceLoan', 'Model');

/**
 * DeviceLoan Test Case
 *
 */
class DeviceLoanTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.device_loan', 'app.device', 'app.device_type', 'app.brand', 'app.partner', 'app.external_intervention_number_type', 'app.external_intervention_number', 'app.intervention', 'app.document', 'app.email', 'app.loan', 'app.person', 'app.language', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.location', 'app.article', 'app.estimate', 'app.estimate_item', 'app.loan_article', 'app.personal_loan', 'app.personal_loan_reason', 'app.technical_loan', 'app.problem', 'app.problem_category', 'app.cause', 'app.causes_devices_problem', 'app.diagnostic', 'app.causes_diagnostic', 'app.interventions_problem', 'app.brands_partner', 'app.device_category', 'app.device_types');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeviceLoan = ClassRegistry::init('DeviceLoan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeviceLoan);

		parent::tearDown();
	}

}
