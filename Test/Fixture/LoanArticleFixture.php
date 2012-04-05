<?php
/**
 * LoanArticleFixture
 *
 */
class LoanArticleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'loan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'person_technician_return_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'actual_return_date' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 15),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'article_id' => 1,
			'loan_id' => 1,
			'person_technician_return_id' => 1,
			'actual_return_date' => 1
		),
	);
}
