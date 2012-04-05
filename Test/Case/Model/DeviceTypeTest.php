<?php
App::uses('DeviceType', 'Model');

/**
 * DeviceType Test Case
 *
 */
class DeviceTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.device_type', 'app.device_brand', 'app.device_category', 'app.device', 'app.person', 'app.language', 'app.email', 'app.loan', 'app.loan_article', 'app.article', 'app.location', 'app.operation', 'app.intervention', 'app.document', 'app.estimate', 'app.external_intervention_number', 'app.partner', 'app.external_intervention_number_type', 'app.brand', 'app.brands_partner', 'app.estimate_item', 'app.technical_loan', 'app.problem', 'app.problem_category', 'app.cause', 'app.causes_devices_problem', 'app.diagnostic', 'app.causes_diagnostic', 'app.interventions_problem', 'app.operation_type', 'app.operation_category', 'app.article_type', 'app.article_damage', 'app.personal_loan', 'app.personal_loan_reason');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeviceType = ClassRegistry::init('DeviceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeviceType);

		parent::tearDown();
	}

}
