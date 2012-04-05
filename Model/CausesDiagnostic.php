<?php
App::uses('AppModel', 'Model');
/**
 * CausesDiagnostic Model
 *
 * @property Diagnostic $Diagnostic
 * @property Cause $Cause
 */
class CausesDiagnostic extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'diagnostic_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cause_id' => array(
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
		'Diagnostic' => array(
			'className' => 'Diagnostic',
			'foreignKey' => 'diagnostic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cause' => array(
			'className' => 'Cause',
			'foreignKey' => 'cause_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
