<?php
App::uses('AppController', 'Controller');
/**
 * Works Controller
 *
 * @property Work $Work
 */
class WorksController extends AppController {

	public $components = array('Paginator');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Work->recursive = 0;
		
		$this->Work->locale = $this->Session->read('Config.language');
		
		$this->layout = 'works';
		
		$areas = $this->Area->find('all',
			array(
					//'fields' => array('Work.id','Work.name','Work.visible','Work.url', 'Work.msg', 'Work.filename'),
					'conditions' => array('Area.visible' => 1),
					//'limit' => 20,
					'order' => array('Area.order'),
			)
		);		
		
		$this->set(array('areas' => $areas));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($url) {
		
		//$this->loadModel('Picture');
		
		$this->Work->locale = $this->Session->read('Config.language');

		$this->layout = 'detail';
			
		$work = $this->Work->findByUrl($url);
		
		/*$pictures = $this->Picture->find('all',
				array(
						'conditions' => array('Picture.visible' => 1, 'Picture.work_id' => $work['Work']['id']),
						'order' => array('Picture.order'),
				)
		);*/
		
		$this->set(array('work'	=> $work, /*'pictures' => $pictures*/));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
				
		$this->Work->locale = $this->viewVars['langCodes'];
		
		$this->Paginator->settings = array(
		
				'limit' => 20,
				'order' => array('Work.date' => 'DESC')
		);
		
		$this->set(array('works' => $this->paginate('Work')));
				
	}	
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		$this->Section->locale = $this->viewVars['langCodes'];
		
		$this->set('customers', $this->Work->Customer->find('list'));
		
		$this->Work->Area->locale = $this->viewVars['langCodes'];
			
		$this->set('areas', $this->Work->Area->find('list'));
		
		if ($this->request->is('post')) {
			if(!empty($this->request->data['Work']['filename']['name'])) {
				$filename = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Work']['filename']['name'];
				$tempname = $this->request->data['Work']['filename']['tmp_name'];			
				if(move_uploaded_file($tempname, $filename)) {
					$this->Work->create();	 				
				}
			}
			$data['Work']['filename'] = $this->request->data['Work']['filename']['name'];
			$this->request->data['Work']['filename'] = $data['Work']['filename'];
			
			if ($this->Work->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'), 'msg_ko');
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

		$this->Work->id = $id;
		
		$this->set('customers', $this->Work->Customer->find('list'));
		
		$this->Work->Area->locale = $this->viewVars['langCodes'];
		
		$this->set('areas', $this->Work->Area->find('list'));
			
		$this->Work->locale = $this->viewVars['langCodes'];
		
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		} 
		
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if (empty($this->request->data['Work']['filename']['name']))
				$this->request->data['Work']['filename']['name'] = $this->request->data['Work']['current'];
				
			$fileurl = WWW_ROOT. DS . 'uploads/images'.DS.$this->request->data['Work']['filename']['name'];
			$tempname = $this->request->data['Work']['filename']['tmp_name'];
				
			move_uploaded_file($tempname, $fileurl);
				
			$data = $this->request->data['Work']['filename']['name'];
			$this->request->data['Work']['filename'] = $data;
			
			if ($this->Work->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'), 'msg_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'), 'msg_ko');
			}
		} else {
			
			$this->Work->bindTranslation(array('name' => '_name', 'text' => '_text', 'msg' => '_msg'));
			$work = $this->Work->find('first', array('conditions' => array('Work.id' => $id)));
			$this->request->data = $work;
			
			$result = Set::combine($work,'_name.{n}.locale', '_name.{n}.content');			
			$this->request->data['Work']['name'] = $result;
			
			$result = Set::combine($work,'_text.{n}.locale', '_text.{n}.content');			
			$this->request->data['Work']['text'] = $result;
			
			$result = Set::combine($work,'_msg.{n}.locale', '_msg.{n}.content');
			$this->request->data['Work']['msg'] = $result;
			
			$this->request->newData = $this->request->data;
			$this->request->data = array();
			$this->request->data['Work'] = $this->request->newData['Work'];
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
		$this->Work->id = $id;
		if (!$this->Work->exists()) {
			throw new NotFoundException(__('Invalid work'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Work->delete()) {
			$this->Session->setFlash(__('Work deleted'), 'msg_ok');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Work was not deleted'), 'msg_ko');
		$this->redirect(array('action' => 'index'));
	}
	
	public function admin_show(){
	
		$this->autoRender = false;
	
		if ($this->request->is('ajax'))
		{
			$this->Work->id = $this->data['id'];
			$this->Work->saveField('visible', $this->data['show']);
		}
	
		$this->redirect(array('action' => 'index'));
	
	}
	
}
