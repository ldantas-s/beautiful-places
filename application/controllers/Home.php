<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model('place');
		$places['places'] = $this->place->getPlaces();

		$this->load->view('content', $places);		
	}

	public function place($id) {
	
		$this->load->model('place');
		$data = $this->place->getPlace($id)[0];

		$rules = array(
			array(
				'field'=>'username',
				'class'=>'form-control',
				'rules'=>'required',
				'errors'=>['required'=>'Por favor, preencha o campo username']
			),
			array(
				'field'=>'comment',
				'class'=>'form-control',
				'rules'=>'required',
				'errors'=>['required'=>'Por favor, preencha o campo comment']

			),
		);
		
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('place', ['place'=>$data, 'success'=>NULL]);
		} else {
			$this->load->view('place', ['place'=>$data,'success'=>'Comment with success!']);
		}

	}

}
