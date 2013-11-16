<?php

//App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {
 
    function send() {
    	
    	$this->layout = 'sections';
    	
        if(!empty($this->data)) {
        	
            $this->Contact->set($this->data);
 
            if($this->Contact->validates()) {
            	
            	$Email = new CakeEmail();
            	
            	$Email->from(array($this->data['Contact']['email'] => $this->data['Contact']['name']))
	            	->to($this->viewVars['parameters']['Parameter']['mail'])
	            	->subject(__('Web contact'))
	            	->send($this->data['Contact']['message']);
            	
                $this->Session->setFlash(__('Your message has been sent. Thanks for your attention, you will soon receive a reply.'), 'default', array('class' => 'success'));

                $this->render('success');
            } else {
                $this->render('index');
            }
        }
    }
 
    function index($url = null) {
    	
    	$this->layout = 'sections';
    	
    	$this->loadModel('Section');
    	
    	$this->Section->locale = $this->Session->read('Config.language');
    	
    	$section = $this->Section->findByUrl('contacto');
    	
    	$this->set(array('section' => $section));
    }
 
}