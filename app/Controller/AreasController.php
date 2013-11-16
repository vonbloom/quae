<?php
App::uses('AppController', 'Controller');
/**
 * Areas Controller
 *
 * @property Area $Area
 */
class AreasController extends AppController {
	
	public $helpers = array('Js');
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($url) {
		
		$this->layout = 'areas';
	
		$this->Area->locale = $this->Session->read('Config.language');
		
		$area = $this->Area->findByUrl($url);
		
		$this->set(array('area' => $area));
	}
	
	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($id = null) {
		
		if (!$id) {
			
			$this->Area->locale = $this->viewVars['langCodes'];
			
			$this->set('areas', $this->Area->find('all',
					
					array(
							//'fields' => array('Area.id','Area.name','Area.visible','Area.url','Area.filename'),
							'order' => array('Area.order'),
					)
			));
				
		} else if (!$this->Area->exists($id)) {
			
				throw new NotFoundException(__('Invalid area'));
				
		} else {
			
				$this->set('areas', $this->Area->find('all', array('conditions' => array('Area.parent_id' => $id))));
		}
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		$this->Area->locale = $this->viewVars['langCodes'];

		if ($this->request->is('post')) {
// 			if(!empty($this->request->data['Area']['filename']['name'])) {
// 				$filename = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Area']['filename']['name'];
// 				$tempname = $this->request->data['Area']['filename']['tmp_name'];			
// 				if(move_uploaded_file($tempname, $filename)) {
					$this->Area->create();	 				
//				}
//			}
// 			$data['Area']['filename'] = $this->request->data['Area']['filename']['name'];
// 			$this->request->data['Area']['filename'] = $data['Area']['filename'];
			
			if ($this->Area->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The area has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area could not be saved. Please, try again.'), 'msg_ko');
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
		
		$this->Area->id = $id;
		
		if (!$this->Area->exists($id)) {
			throw new NotFoundException(__('Invalid area'));
		} 
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
// 			if (empty($this->request->data['Area']['filename']['name']))
// 				$this->request->data['Area']['filename']['name'] = $this->request->data['Area']['current'];
				
// 			$fileurl = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Area']['filename']['name'];
// 			$tempname = $this->request->data['Area']['filename']['tmp_name'];
				
// 			move_uploaded_file($tempname, $fileurl);
				
// 			$data = $this->request->data['Area']['filename']['name'];
// 			$this->request->data['Area']['filename'] = $data;
			
			if ($this->Area->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The area has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area could not be saved. Please, try again.'), 'msg_ko');
			}
		} else {			 			
			$this->Area->locale = $this->viewVars['langCodes'];
			$this->Area->bindTranslation(array('name' => '_name', 'title' => '_title', 'text' => '_text', 'subtitle1' => '_subtitle1', 'text2' => '_text2', 'subtitle2' => '_subtitle2', 'text3' => '_text3'));
			$area = $this->Area->find('first', array('conditions' => array('Area.id' => $id)));
			$this->request->data = $area;
			
			$result = Set::combine($area,'_name.{n}.locale', '_name.{n}.content');			
			$this->request->data['Area']['name'] = $result;
			
			$result = Set::combine($area,'_title.{n}.locale', '_title.{n}.content');
			$this->request->data['Area']['title'] = $result;
			
			$result = Set::combine($area,'_text.{n}.locale', '_text.{n}.content');			
			$this->request->data['Area']['text'] = $result;
			
			$result = Set::combine($area,'_subtitle1.{n}.locale', '_subtitle1.{n}.content');
			$this->request->data['Area']['subtitle1'] = $result;
				
			$result = Set::combine($area,'_text2.{n}.locale', '_text2.{n}.content');
			$this->request->data['Area']['text2'] = $result;
			
			$result = Set::combine($area,'_subtitle2.{n}.locale', '_subtitle2.{n}.content');
			$this->request->data['Area']['subtitle2'] = $result;
				
			$result = Set::combine($area,'_text3.{n}.locale', '_text3.{n}.content');
			$this->request->data['Area']['text3'] = $result;
			
			$this->request->newData = $this->request->data;
			$this->request->data = array();
			$this->request->data['Area'] = $this->request->newData['Area'];
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
		$this->Area->id = $id;
		if (!$this->Area->exists()) {
			throw new NotFoundException(__('Invalid area'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Area->delete()) {
			$this->Session->setFlash(__('Area deleted'), 'msg_ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Area was not deleted'), 'msg_ko');
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_reorder(){
		
		$this->autoRender = false;
		
		if ($this->request->is('ajax'))
		{
			foreach($this->data['items'] as $order => $id) {
				$this->Area->id = $id;
				$this->Area->saveField('order', $order);
			}
		}
		
		$this->redirect(array('action' => 'index'));

	}

	public function admin_show(){
		
		$this->autoRender = false;
		
		if ($this->request->is('ajax'))
		{
			$this->Area->id = $this->data['id'];
			$this->Area->saveField('visible', $this->data['show']);
		}
		
		$this->redirect(array('action' => 'index'));

	}
	
}

