<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model('place');
		$places['places'] = $this->place->getPlaces();

		$this->load->view('content', $places);		
	}

	public function place($id) {
	
		$this->load->model('place');
		$data["place"] = $this->place->getPlace($id)[0];
		
		$this->load->view('place', $data);
	}

	
}
