<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property Language $Language
 * @property Device $Device
 * @property Email $EmailToPerson
 * @property Email $EmailFromPerson
 * @property Loan $LoanCustomer
 * @property Loan $LoanTechnician
 * @property Operation $OperationTechnician
 */
class Person extends AppModel {

	// Have a more human displayField than the ID (in form only !)
	// Thanks: http://book.cakephp.org/2.0/en/models/virtual-fields.html#virtual-fields-and-model-aliases
	public function __construct($id = false, $table = null, $ds = null) {

		// Let the parent do his job
	    parent::__construct($id, $table, $ds);

	    // Create the new displayField
	    $this->virtualFields['full_name_with_sciper'] 
	    	= sprintf('CONCAT(%s.first_name, " ", %s.last_name, " [", %s.sciper, "]")', 
	    			  $this->alias, 
	    			  $this->alias, 
	    			  $this->alias);
	}

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'full_name_with_sciper'; // Virtual field

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Device' => array(
			'className' => 'Device',
			'foreignKey' => 'person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmailToPerson' => array(
			'className' => 'Email',
			'foreignKey' => 'to_person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmailFromPerson' => array(
			'className' => 'Email',
			'foreignKey' => 'from_person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'LoanCustomer' => array(
			'className' => 'Loan',
			'foreignKey' => 'person_customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'LoanTechnician' => array(
			'className' => 'Loan',
			'foreignKey' => 'person_technician_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'OperationTechnician' => array(
			'className' => 'Operation',
			'foreignKey' => 'person_technician_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
