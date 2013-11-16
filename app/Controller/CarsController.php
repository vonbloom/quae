<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class CarsController extends AppController {
	
	public $helpers = array('Js');
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function index() {
		
		//$bookings = $this->Booking->find('all');
		
		//debug($bookings);
		
		//$this->set(array('bookings' => $bookings));
	}

	
}

