<?php
App::uses('OperationType', 'Model');

/**
 * OperationType Test Case
 *
 */
class OperationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.operation_type', 'app.operation_category', 'app.operation', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.email', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.loan_article', 'app.article', 'app.location', 'app.article_type', 'app.article_damage', 'app.person_technician_return', 'app.personal', 'app.personal_loan', 'app.technical', 'app.technical_loan', 'app.to_person', 'app.from_person', 'app.external_intervention_number', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types', 'app.estimate', 'app.interventions', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperationType = ClassRegistry::init('OperationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperationType);

		parent::tearDown();
	}

}
