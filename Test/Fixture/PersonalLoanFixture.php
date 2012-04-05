<?php
/**
 * PersonalLoanFixture
 *
 */
class PersonalLoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'loan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8),
		'Emprunt_IdxSciper' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'Emprunt_IdxTechnicien' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'personal_loan_reason_id' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Emprunt_Date' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 15),
		'planned_return_date' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 15),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'loan_id' => 1,
			'Emprunt_IdxSciper' => 1,
			'Emprunt_IdxTechnicien' => 1,
			'personal_loan_reason_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Emprunt_Date' => 1,
			'planned_return_date' => 1
		),
	);
}
