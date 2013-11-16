<?php
App::uses('AppController', 'Controller');
/**
 * Parameters Controller
 *
 * @property Parameter $Parameter
 */
class ParametersController extends AppController {
	
	//public $helpers = array('Js');

	
	/**
	 * admin_index method
	 *
	 * @return void
	 */
// 	public function admin_index() {
	
// 		$this->set('parameters', $this->Parameter->find('all'));
// 	}
	
	
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_edit($id = null) {
		
		$this->Parameter->id = $id;
		
		if (!$this->Parameter->exists()) {
			
			throw new NotFoundException(__('Invalid parameter'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if ($this->Parameter->save($this->request->data)) {
				
				$this->Session->setFlash(__('The parameter has been saved'), 'msg_ok');
				
				$this->redirect(array('action' => 'edit', $id));
				
			} else {
				
				$this->Session->setFlash(__('The parameter could not be saved. Please, try again.'), 'msg_ko');
				
			}
			
		} else {
			
			$this->request->data = $this->Parameter->read(null, $id);
		}
	}
		
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
// 	public function admin_delete($id = null) {
		
// 		$this->Parameter->id = $id;
		
// 		if (!$this->Parameter->exists()) {
			
// 			throw new NotFoundException(__('Invalid parameter'));
// 		}
		
// 		$this->request->onlyAllow('post', 'delete');
		
// 		if ($this->Parameter->delete()) {
			
// 			$this->Session->setFlash(__('Parameter deleted'), 'msg_ok');
			
// 			$this->redirect(array('action' => 'index'));
// 		}
		
// 		$this->Session->setFlash(__('Parameter was not deleted'), 'msg_ko');
		
// 		$this->redirect(array('action' => 'index'));
// 	}
}
