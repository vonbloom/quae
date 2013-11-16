<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {
	
	public $components = array('Paginator');
	

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
				
		$this->Customer->locale = $this->viewVars['langCodes'];
		
		$this->Paginator->settings = array(
		
				//'conditions' => array('Customer.visible <> 0'),
				'limit' => 20,
				'order' => array('Customer.name' => 'asc')
		);
		
		$this->set(array('customers' => $this->paginate('Customer')));
				
	}	
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
								
		if ($this->request->is('post')) {
			
			if(!empty($this->request->data['Customer']['filename']['name'])) {
				
				$filename = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Customer']['filename']['name'];
				
				$tempname = $this->request->data['Customer']['filename']['tmp_name'];	
						
				if(move_uploaded_file($tempname, $filename)) {
					
					$this->Customer->create();	 				
				}
			}
			
			$data['Customer']['filename'] = $this->request->data['Customer']['filename']['name'];
			
			$this->request->data['Customer']['filename'] = $data['Customer']['filename'];
			
			if ($this->Customer->saveAssociated($this->request->data)) {
				
				$this->Session->setFlash(__('The customer has been saved'), 'msg_ok');
				
				$this->redirect(array('action' => 'index'));
				
			} else {
				
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'msg_ko');
			}
		}				
	}
	
/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		$this->Customer->id = $id;
		
		if (!$this->Customer->exists($id)) {
			throw new NotFoundException(__('Invalid customer'));
		}	
						
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if (empty($this->request->data['Customer']['filename']['name']))
				
				$this->request->data['Customer']['filename']['name'] = $this->request->data['Customer']['current'];
				
			$fileurl = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Customer']['filename']['name'];
			
			$tempname = $this->request->data['Customer']['filename']['tmp_name'];
				
			move_uploaded_file($tempname, $fileurl);
				
			$data = $this->request->data['Customer']['filename']['name'];
			
			$this->request->data['Customer']['filename'] = $data;
			
			if ($this->Customer->saveAssociated($this->request->data)) {
				
				$this->Session->setFlash(__('The customer has been saved'), 'msg_ok');
				
				$this->redirect(array('action' => 'index'));
				
			} else {
				
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.'), 'msg_ko');
			}
		} else {
			
			$customer = $this->Customer->find('first', array('conditions' => array('Customer.id' => $id)));
			
			$this->request->data = $customer;
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
		
		$this->Customer->id = $id;
		
		if (!$this->Customer->exists()) {
			
			throw new NotFoundException(__('Invalid customer'));
		}
		
		$this->request->onlyAllow('post', 'delete');
		
		if ($this->Customer->delete()) {
			
			$this->Session->setFlash(__('Customer deleted'), 'msg_ok');
			
			$this->redirect(array('action' => 'index'));
		}
		
		$this->Session->setFlash(__('Customer was not deleted'), 'msg_ko');
		
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_show(){
	
		$this->autoRender = false;
	
		if ($this->request->is('ajax'))
		{
			$this->Customer->id = $this->data['id'];
			
			$this->Customer->saveField('visible', $this->data['show']);
		}
	
		$this->redirect(array('action' => 'index'));
	
	}
	
}
