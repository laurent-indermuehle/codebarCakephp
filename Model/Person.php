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

	public $actsAs = array('IsLoanLate');

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

/**
 * function getPersonDevices
 *
 * Retrieve all devices who belong to a person
 */
	public function getPersonDevices(){
		$devices = $this->Device->find('all', array(
			'conditions' => array(
				'Device.person_id' => $this->id
			),
			'contain' => array(
				'DeviceType' => array('Brand'),
				'Intervention'
			)
		));
		return $devices;
	}

/**
 * function getPersonLoans
 *
 * Retrieve all loans made by a person and calcultate dates related to each one
 */
	public function getPersonLoans(){
		$loans = $this->LoanCustomer->find('all', array(
			'conditions' => array(
				'LoanCustomer.person_customer_id' => $this->id
			),
			'contain' => array(
				'PersonalLoan',
				'TechnicalLoan',
				'DeviceLoan' => array(
					'Device.id' => array('DeviceType.name' => array('Brand.name'))
				)
			)
		));

		// We add a new variable in the array using &(reference)
		foreach($loans as &$loan) {
			// Retrieve the date when the last device was returned
			$actual_return_date = $this->getLastReturnDateForALoan($loan);
			// 1 means there was an error. In the past our DB wasn't recording the return date so we test if it's not null
			if ($actual_return_date != 1 AND !is_null($actual_return_date)) {
				// New variable inserted in the array
				$loan['ActualReturnDate'] = $actual_return_date;
				// We calculate the difference between the planned return date and the actual return date. But only for Personal_loans
				if(!empty($loan['PersonalLoan'])) {
					// use Model/Behavior/IsLoanLateBehavior.php
					$loan['DeltaDate'] = $this->IsLoanLate($loan['PersonalLoan'][0]['planned_return_date'], $actual_return_date);
				}
				elseif(!empty($loan['TechnicalLoan'])) {
					$loan['DeltaDate'] = NULL;
				}
			}
			else {
				$loan['ActualReturnDate'] = NULL;
				$loan['DeltaDate'] = NULL;
			}
		}
		return $loans;
	}

/**
 * function getLastReturnDateForALoan
 *
 * Each device can be return separately and in order to calculate when a loan is really closed we have
 * to exctract the biggest date.
 * 
 *  * @var array from model Loan
 */
	private function getLastReturnDateForALoan($loan) {	
		if(count($loan['DeviceLoan']) == 1){
			if(!is_null($loan['DeviceLoan'][0]['actual_return_date'])) {
				return $loan['DeviceLoan'][0]['actual_return_date'];
			}
			else {
				return '1';
			}
		}
		elseif(count($loan['DeviceLoan']) > 1) {
			$biggest_date = NULL;
			foreach($loan['DeviceLoan'] as $DeviceLoan) {
				if ($DeviceLoan['actual_return_date'] > $biggest_date) {
					$biggest_date = $DeviceLoan['actual_return_date'];
				}
			}
			return $biggest_date;
		}
		else {
			return '1';
		}
	}



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
		),
		'Partner' => array(
			'className' => 'Partner',
			'foreignKey' => 'partner_id',
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
