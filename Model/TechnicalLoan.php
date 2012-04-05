<?php
App::uses('AppModel', 'Model');
/**
 * TechnicalLoan Model
 *
 * @property Intervention $Intervention
 * @property Loan $Loan
 */
class TechnicalLoan extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'intervention_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Intervention' => array(
			'className' => 'Intervention',
			'foreignKey' => 'intervention_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Loan' => array(
			'className' => 'Loan',
			'foreignKey' => 'loan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
