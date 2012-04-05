<?php
App::uses('PersonalLoan', 'Model');

/**
 * PersonalLoan Test Case
 *
 */
class PersonalLoanTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.personal_loan', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.email', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.external_intervention_number', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types', 'app.estimate', 'app.interventions', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.location', 'app.article', 'app.article_type', 'app.article_damage', 'app.loan_article', 'app.technical_loan', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem', 'app.to_person', 'app.from_person', 'app.personal', 'app.technical', 'app.personal_loan_reason');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonalLoan = ClassRegistry::init('PersonalLoan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonalLoan);

		parent::tearDown();
	}

}
