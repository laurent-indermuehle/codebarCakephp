<?php
App::uses('InterventionsProblem', 'Model');

/**
 * InterventionsProblem Test Case
 *
 */
class InterventionsProblemTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.interventions_problem', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.causes_devices_problem', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.document', 'app.email', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.loan_article', 'app.article', 'app.location', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.estimate', 'app.interventions', 'app.external_intervention_number', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types', 'app.article_type', 'app.article_damage', 'app.person_technician_return', 'app.personal', 'app.personal_loan', 'app.technical', 'app.technical_loan', 'app.to_person', 'app.from_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InterventionsProblem = ClassRegistry::init('InterventionsProblem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InterventionsProblem);

		parent::tearDown();
	}

}
