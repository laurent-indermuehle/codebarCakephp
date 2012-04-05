<?php
App::uses('ArticleType', 'Model');

/**
 * ArticleType Test Case
 *
 */
class ArticleTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.article_type', 'app.article', 'app.location', 'app.operation', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.email', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.loan_article', 'app.person_technician_return', 'app.personal', 'app.personal_loan', 'app.technical', 'app.technical_loan', 'app.to_person', 'app.from_person', 'app.external_intervention_number', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types', 'app.estimate', 'app.interventions', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem', 'app.operation_type', 'app.operation_category', 'app.article_damage');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticleType = ClassRegistry::init('ArticleType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticleType);

		parent::tearDown();
	}

}
