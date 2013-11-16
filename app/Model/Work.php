<?php
App::uses('AppModel', 'Model');
/**
 * Section Model
 *
 */
class Work extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	//public $useDbConfig = 'scaq';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	public $belongsTo = array('Area', 'Customer');
	
	public $hasMany = array('Picture');

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
		'customer_id' => array(
				'notempty' => array(
						'rule' => array('notempty'),
				),
		),
		'area_id' => array(
				'notempty' => array(
						'rule' => array('notempty'),
				),
		),
				
	);
	
	public $actsAs = array(
			'Translate' => array('name', 'text', 'msg')
	);
		
	function beforeSave($options = array())
	{
// 		if (empty($this->id)) {
// 			$this->data[$this->name]['url'] = $this->_getStringAsURL($this->data[$this->name]['name']);
			$url = strtolower($this->data[$this->name]['name']);
			$this->data[$this->name]['url'] = Inflector::slug($url, '-');
// 		}
	
		return true;
	}
}
