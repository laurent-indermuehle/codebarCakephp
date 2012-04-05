<?php
App::uses('AppModel', 'Model');
/**
 * LoanArticle Model
 *
 * @property Article $Article
 * @property Loan $Loan
 * @property PersonTechnicianReturn $PersonTechnicianReturn
 */
class LoanArticle extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'article_id' => array(
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
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'article_id',
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
		),
		'PersonTechnicianReturn' => array(
			'className' => 'Person',
			'foreignKey' => 'person_technician_return_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
