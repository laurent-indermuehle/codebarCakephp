<?php
App::uses('BrandsPartner', 'Model');

/**
 * BrandsPartner Test Case
 *
 */
class BrandsPartnerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brands_partner', 'app.brand', 'app.partner', 'app.external_intervention_number', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.email', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.loan_article', 'app.article', 'app.location', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.estimate', 'app.interventions', 'app.article_type', 'app.article_damage', 'app.person_technician_return', 'app.personal', 'app.personal_loan', 'app.technical', 'app.technical_loan', 'app.to_person', 'app.from_person', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem', 'app.external_intervention_number_types');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BrandsPartner = ClassRegistry::init('BrandsPartner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BrandsPartner);

		parent::tearDown();
	}

}
