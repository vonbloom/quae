<?php
App::uses('AppController', 'Controller');
/**
 * Languages Controller
 *
 * @property Language $Language
 */
class LanguagesController extends AppController {
	
	//public $helpers = array('Js');

	
	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
	
		$this->set('languages', $this->Language->find('all'));
	}
	
	
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		if ($this->request->is('post')) {
			
			if ($this->Language->save($this->request->data)) {
				
				$this->Session->setFlash(__('The language has been saved'), 'msg_ok');
				
				$this->redirect(array('action' => 'index'));
				
			} else {
				
				$this->Session->setFlash(__('The language could not be saved. Please, try again.'), 'msg_ko');
			}				
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		
		$this->Language->id = $id;
		
		if (!$this->Language->exists()) {
			
			throw new NotFoundException(__('Invalid language'));
		}
		
		$this->request->onlyAllow('post', 'delete');
		
		if ($this->Language->delete()) {
			
			$this->Session->setFlash(__('Language deleted'), 'msg_ok');
			
			$this->redirect(array('action' => 'index'));
		}
		
		$this->Session->setFlash(__('Language was not deleted'), 'msg_ko');
		
		$this->redirect(array('action' => 'index'));
	}
}
