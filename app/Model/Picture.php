<?php
App::uses('AppModel', 'Model');
/**
 * Picture Model
 *
 */
class Picture extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	//public $useDbConfig = 'hdl';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
	
	public $belongsTo = array('Work');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'work_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'order' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'visible' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filename' => array(
				'rule1' => array(
						'rule' => array('extension', array('jpeg','jpg','png','gif')),
						'required' => 'create',
						'allowEmpty' => false,
						'message' => 'Select valid image',
						'on' => 'create',
						'last' => true
				),
		),
		
	);
	
	public $actsAs = array(
			'Translate' => array('text')
	);
	
}
