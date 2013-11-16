<?php
App::uses('AppController', 'Controller');
/**
 * Pictures Controller
 *
 * @property Picture $Picture
 */
class PicturesController extends AppController {

	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($id = null) {
		
		$this->Picture->locale = $this->viewVars['langCodes'];
	
		if (isset($id)) {
			if ($this->Picture->Work->exists($id)) {
				
				$this->Paginator->settings = array(
					'conditions' => array('Picture.work_id' => $id),
					'limit' => 20,
					'order' => array('Picture.order')
			);
		
			$this->set(array('pictures' => $this->paginate('Picture')));
			
			} else {
				
				throw new NotFoundException(__('Invalid work'));
			}
		} else {			
		
			$this->Paginator->settings = array(		
					'limit' => 20,
					'order' => array('Picture.order')
			);
		
			$this->set(array('pictures' => $this->paginate('Picture')));
		}
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		$this->Picture->Work->locale = $this->viewVars['langCodes'];
		
		$this->set('works', $this->Picture->Work->find('list'));
		
		if ($this->request->is('post')) {
			
			$filename = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Picture']['filename']['name'];
			$tempname = $this->request->data['Picture']['filename']['tmp_name'];
			
			if(move_uploaded_file($tempname, $filename)) {	
							
				$this->Picture->create();
				$data['Picture']['filename'] = $this->request->data['Picture']['filename']['name'];
				$this->request->data['Picture']['filename'] = $data['Picture']['filename'];
				
				if ($this->Picture->saveAssociated($this->request->data)) {
					
					$this->Session->setFlash(__('The picture has been saved'), 'msg_ok');
					
					if ($this->request->data['Picture']['work_id'] != 0)
						$this->redirect(array('controller' => 'pictures' ,'action' => 'index', $this->request->data['Picture']['work_id']));
					else
						$this->redirect(array('controller' => 'pictures' ,'action' => 'index'));
				} else {
					$this->Session->setFlash(__('The picture could not be saved. Please, try again.'), 'msg_ko');
				}
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
		
		$this->Picture->id = $id;
		
		$this->Picture->locale = $this->viewVars['langCodes'];
		
		$this->Picture->Work->locale = $this->viewVars['langCodes'];
		
		$this->set('works', $this->Picture->Work->find('list'));
		
		
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
				
			if (empty($this->request->data['Picture']['filename']['name']))
				$this->request->data['Picture']['filename']['name'] = $this->request->data['Picture']['current'];
			
			$fileurl = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Picture']['filename']['name'];
			$tempname = $this->request->data['Picture']['filename']['tmp_name'];
			
			move_uploaded_file($tempname, $fileurl);
			
			$data = $this->request->data['Picture']['filename']['name'];
			$this->request->data['Picture']['filename'] = $data;
			
			if ($this->Picture->saveAssociated($this->request->data)) {
				
				$this->Session->setFlash(__('The picture has been saved'), 'msg_ok');
				
				if ($this->request->data['Picture']['work_id'] != 0)
					
					$this->redirect(array('controller' => 'pictures' ,'action' => 'index', $this->request->data['Picture']['work_id']));
				else
					
					$this->redirect(array('controller' => 'pictures' ,'action' => 'index'));
			} else {
				
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'), 'msg_ko');
			}
		} else {		
				 			
			$this->Picture->locale = $this->viewVars['langCodes'];
			$this->Picture->bindTranslation(array('text' => '_text'));
			$section = $this->Picture->find('first', array('conditions' => array('Picture.id' => $id)));
			$this->request->data = $section;
						
			$result = Set::combine($section,'_text.{n}.locale', '_text.{n}.content');			
			$this->request->data['Picture']['text'] = $result;
			
			$this->request->newData = $this->request->data;
			$this->request->data = array();
			$this->request->data['Picture'] = $this->request->newData['Picture'];
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
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		if ($this->Picture->delete()) {
			
			$this->Session->setFlash(__('Picture deleted'), 'msg_ok');
			if ($this->request->data['Picture']['work_id'] != 0)
				$this->redirect(array('controller' => 'pictures' ,'action' => 'index', $this->request->data['Picture']['work_id']));
			else
				$this->redirect(array('controller' => 'pictures' ,'action' => 'index'));
	}
		$this->Session->setFlash(__('Picture was not deleted'), 'msg_ko');
		$this->redirect(array('controller' => 'pictures' ,'action' => 'index', $this->request->params['pass'][0]));
	}
	
	
	public function admin_reorder(){
	
		$this->autoRender = false;
	
		if ($this->request->is('ajax'))
		{
			foreach($this->data['items'] as $order => $id) {
				$this->Picture->id = $id;
				$this->Picture->saveField('order', $order);
			}
		}
	
		$this->redirect(array('action' => 'index'));
	
	}
	
	
	public function admin_show(){
	
		$this->autoRender = false;
	
		if ($this->request->is('ajax'))
		{
			$this->Picture->id = $this->data['id'];
			$this->Picture->saveField('visible', $this->data['show']);
		}
	
		$this->redirect(array('action' => 'index'));
	
	}
	
}
