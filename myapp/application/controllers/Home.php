<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model('places');
		$places['places'] = $this->places->placesImages();
		// $error['error'] = '';

		$this->load->view('layout/header', ['error'=>'', 'success'=>'']);
		$this->load->view('content', $places);
		$this->load->view('layout/footer');
	}

	public function place($id) {
	
		$this->load->model('places');	 
		$data["place"] = $this->places->placeInfo($id);

		$this->load->view('layout/header', ['error'=>'', 'success'=>'']);
		$this->load->view('place', $data);
		$this->load->view('layout/footer');

	}

	
}
