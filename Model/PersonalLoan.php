<?php
App::uses('AppModel', 'Model');
/**
 * PersonalLoan Model
 *
 * @property Loan $Loan
 * @property PersonalLoanReason $PersonalLoanReason
 */
class PersonalLoan extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'loan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Emprunt_IdxSciper' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Emprunt_IdxTechnicien' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Emprunt_Date' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Loan' => array(
			'className' => 'Loan',
			'foreignKey' => 'loan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonalLoanReason' => array(
			'className' => 'PersonalLoanReason',
			'foreignKey' => 'personal_loan_reason_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}