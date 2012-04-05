<?php
/**
 * LoanFixture
 *
 */
class LoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary'),
		'person_customer_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'person_technician_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'Emprunt_Raison' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'borrow_date' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 15),
		'Emprunt_DateRetour' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 15),
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
			'person_customer_id' => 1,
			'person_technician_id' => 1,
			'Emprunt_Raison' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'borrow_date' => 1,
			'Emprunt_DateRetour' => 1
		),
	);
}
