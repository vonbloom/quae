<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	//public $uses = array('Parameter, Language, Section, Area');
	
	public $components = array(
			'Cookie',
			'Session',
			'Auth' => array(
					'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard', 'admin' => true),
					'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
			)
	);
	
	public function beforeFilter() {
		
		parent::beforeFilter();
		
		$this->Auth->allow('index', 'view', 'show', 'search', 'display', 'send');
		
		$this->loadModel('Parameter');
		
		$parameters = $this->Parameter->find('first');
		
		$this->_setLanguage($parameters['Parameter']['language']);
		
		$this->set(array('activeLang' => $this->Cookie->read('lang'), 'defaultLang' => $parameters['Parameter']['language']));
		
		
		if ($this->Session->check('Config.language')) {
			Configure::write('Config.language', $this->Session->read('Config.language'));
		}
		
		if ((isset($this->params['prefix']) && ($this->params['prefix'] == 'admin'))) {
			$this->layout = 'admin';
		}
				
		$this->loadModel('Section');
		
		$this->Section->locale = $this->Session->read('Config.language');
		
		
		$menu = $this->Section->find('all',
				array(
						'conditions' => array('Section.parent_id' => 0, 'Section.visible' => 1, 'Section.menu' => 1),
						'order' => array('Section.order'),
				)
		);
		
		$footer = $this->Section->find('all',
				array(
						'conditions' => array('Section.parent_id' => 0, 'Section.visible' => 1, 'Section.footer' => 1),
						'order' => array('Section.order'),
				)
		);
		
		$this->loadModel('Area');
		
		$this->Area->locale = $this->Session->read('Config.language');
		
		$areas = $this->Area->find('all',
				array(
						'conditions' => array('Area.visible' => 1),
						'order' => array('Area.order'),
				)
		);
		
		$this->loadModel('Language');
		
		$languages = $this->Language->find('all',
				array(
						'order' => array('Language.name'),
				)
		);
		
		for ($i=0; $i<count($languages); $i++) {
		
			if ($languages[$i]['Language']['code'] == $this->Session->read('Config.language')) {
		
				$lang = $languages[$i];
				unset($languages[$i]);
				$languages = array_values($languages);
			}
		}
		array_unshift($languages, $lang);
		
		for ($i=0; $i<count($languages); $i++) {
		
			$langCodes[$i] = $languages[$i]['Language']['code'];
		}
		
		$this->set(
				array(
						'parameters'=> $parameters,
						'menu'		=> $menu,
						'footer'	=> $footer,
						'languages'	=> $languages,
						'langCodes'	=> $langCodes,
						'areas'		=> $areas,
				)
		);
	
	}
	
	public function beforeRender() {
	
		parent::beforeRender();
	
		if ((isset($this->params['prefix']) && ($this->params['prefix'] == 'admin'))) {
			$this->set(array(
					'userName' => ucwords($this->Auth->user('username')),
					'userId' => ucwords($this->Auth->user('id'))
			));
		}
	
	}
	
	function _setLanguage($defLang) {
	
		if (!$this->Session->check('Config.language')) {
			if ($this->Cookie->read('lang')) {
				$this->Session->write('Config.language', $this->Cookie->read('lang'));
			} else {
				$this->Session->write('Config.language', $defLang);
				$this->Cookie->write('lang', $this->params['language'], false, '20 days');
			}
		}
		 
	
		if (isset($this->params['language']) && ($this->params['language'] != $this->Session->read('Config.language'))) {
			$this->Session->write('Config.language', $this->params['language']);
			$this->Cookie->write('lang', $this->params['language'], false, '20 days');
		}
		 
	}
}
