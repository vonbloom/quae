<?php
App::uses('AppModel', 'Model');

/**
 * Section Model
 *
 */
class Parameter extends AppModel {

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
	//public $displayField = 'id';
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		//'name' => array(
		//	'notempty' => array(
		//		'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		//	),
		//),
	);
}
