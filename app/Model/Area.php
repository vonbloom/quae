<?php
App::uses('AppModel', 'Model');
/**
 * Area Model
 *
 */
class Area extends AppModel {

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
	public $displayField = 'name';
	
	
	public $hasMany = array('Work');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
// 		'filename' => array(
// 			'rule1' => array(		
// 				'rule' => array('extension', array('jpeg','jpg','png','gif')),
// 				'required' => 'create',
// 				'allowEmpty' => true,
// 				'message' => 'Select valid image',
// 				'on' => 'create',
// 				'last' => true
// 			),
// 		),
	);
	
	public $actsAs = array(
			'Translate' => array('name', 'title', 'text', 'subtitle1', 'text2', 'subtitle2', 'text3')
	);
	
	function beforeSave($options = array())
	{
//  		foreach ($langs as $lang) {
//  			$this->locale = $lang;
 			$url = strtolower($this->data[$this->name]['name']);
 			$this->data[$this->name]['url'] = Inflector::slug($url, '-');
// 		}
 		
		return true;
	}
}
