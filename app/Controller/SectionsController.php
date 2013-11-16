<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class SectionsController extends AppController {
	
	public $helpers = array('Js');
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($url) {
		
		$this->layout = 'sections';
	
		$this->Section->locale = $this->Session->read('Config.language');
		
		$section = $this->Section->findByUrl($url);
		
		$this->set(array('section' => $section));
	}
	
	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($id = null) {
		
		if (!$id) {
			
			$this->Section->locale = $this->viewVars['langCodes'];
			
			$this->set('sections', $this->Section->find('all',
					
					array(
							'fields' => array('Section.id','Section.name','Section.visible','Section.url','Section.filename'),
							'order' => array('Section.order'),
					)
			));
				
		} else if (!$this->Section->exists($id)) {
			
				throw new NotFoundException(__('Invalid section'));
				
		} else {
			
				$this->set('sections', $this->Section->find('all', array('conditions' => array('Section.parent_id' => $id))));
		}
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		$this->Section->locale = $this->viewVars['langCodes'];

		$this->set('sections', $this->Section->find('all', array('conditions' => array('Section.parent_id' => 0))));
		
		if ($this->request->is('post')) {
			if(!empty($this->request->data['Section']['filename']['name'])) {
				$filename = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Section']['filename']['name'];
				$tempname = $this->request->data['Section']['filename']['tmp_name'];			
				if(move_uploaded_file($tempname, $filename)) {
					$this->Section->create();	 				
				}
			}
			$data['Section']['filename'] = $this->request->data['Section']['filename']['name'];
			$this->request->data['Section']['filename'] = $data['Section']['filename'];
			
			if ($this->Section->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'), 'msg_ko');
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
		
		$this->Section->id = $id;
		
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		} 
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if (empty($this->request->data['Section']['filename']['name']))
				$this->request->data['Section']['filename']['name'] = $this->request->data['Section']['current'];
				
			$fileurl = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Section']['filename']['name'];
			$tempname = $this->request->data['Section']['filename']['tmp_name'];
				
			move_uploaded_file($tempname, $fileurl);
				
			$data = $this->request->data['Section']['filename']['name'];
			$this->request->data['Section']['filename'] = $data;
			
			if ($this->Section->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'), 'msg_ko');
			}
		} else {			 			
			$this->Section->locale = $this->viewVars['langCodes'];
			$this->Section->bindTranslation(array('name' => '_name', 'text' => '_text'));
			$section = $this->Section->find('first', array('conditions' => array('Section.id' => $id)));
			$this->request->data = $section;
			
			$result = Set::combine($section,'_name.{n}.locale', '_name.{n}.content');			
			$this->request->data['Section']['name'] = $result;
			
			$result = Set::combine($section,'_text.{n}.locale', '_text.{n}.content');			
			$this->request->data['Section']['text'] = $result;
			
			$this->request->newData = $this->request->data;
			$this->request->data = array();
			$this->request->data['Section'] = $this->request->newData['Section'];
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
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Section->delete()) {
			$this->Session->setFlash(__('Section deleted'), 'msg_ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Section was not deleted'), 'msg_ko');
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_reorder(){
		
		$this->autoRender = false;
		
		if ($this->request->is('ajax'))
		{
			foreach($this->data['items'] as $order => $id) {
				$this->Section->id = $id;
				$this->Section->saveField('order', $order);
			}
		}
		
		$this->redirect(array('action' => 'index'));

	}

	public function admin_show(){
		
		$this->autoRender = false;
		
		if ($this->request->is('ajax'))
		{
			$this->Section->id = $this->data['id'];
			$this->Section->saveField('visible', $this->data['show']);
		}
		
		$this->redirect(array('action' => 'index'));

	}
	
}

