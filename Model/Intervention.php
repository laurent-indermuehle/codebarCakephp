<?php
App::uses('AppModel', 'Model');
/**
 * Intervention Model
 *
 * @property Device $Device
 * @property Document $Document
 * @property Email $Email
 * @property Estimate $Estimate
 * @property ExternalInterventionNumber $ExternalInterventionNumber
 * @property Operation $Operation
 * @property TechnicalLoan $TechnicalLoan
 * @property Problem $Problem
 */
class Intervention extends AppModel {

	// Override the paginate() function to join the DeviceType model too
	// Thanks: http://book.cakephp.org/2.0/en/core-libraries/components/pagination.html#custom-query-pagination
	public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {

		// I choose what I want
		$this->recursive = -1;

		// SELECT
		$query = 'SELECT Intervention.*, Device.id, DeviceType.name
			FROM interventions AS Intervention
			LEFT JOIN devices AS Device
				ON (Intervention.device_id = Device.id)
			LEFT JOIN device_types AS DeviceType
				ON (Device.device_type_id = DeviceType.id)';

		// ORDER BY
		if( ! is_null($order)) {
			$query .= ' ORDER BY ';
			foreach ($order as $field => $type)
				$query .= $field . ' ' . $type; // no ',' because there is only one order field
		}

		// LIMIT
		$query .= ' LIMIT ' . (($page - 1) * $limit) . ', ' . $limit . ';';

		// Query !
		return $this->query($query);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'device_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'entry_date' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Device' => array(
			'className' => 'Device',
			'foreignKey' => 'device_id',
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
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'intervention_id',
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
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'intervention_id',
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
		'Estimate' => array(
			'className' => 'Estimate',
			'foreignKey' => 'intervention_id',
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
		'ExternalInterventionNumber' => array(
			'className' => 'ExternalInterventionNumber',
			'foreignKey' => 'intervention_id',
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
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'intervention_id',
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
		'TechnicalLoan' => array(
			'className' => 'TechnicalLoan',
			'foreignKey' => 'intervention_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Problem' => array(
			'className' => 'Problem',
			'joinTable' => 'interventions_problems',
			'foreignKey' => 'intervention_id',
			'associationForeignKey' => 'problem_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
