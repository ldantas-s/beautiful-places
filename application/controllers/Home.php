<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		// import models
		$this->load->model('place');

		$places['places'] = $this->place->getPlaces();
		$this->load->view('content', $places);		
	}

	public function place($id) {
	
		// import models
		$this->load->model('place');
		$this->load->model('commentary');
		$this->load->model('user_model');


		$data = $this->place->getPlace($id)[0];
		$data['user'] = $this->user_model->showUser($data['id_user'])[0];

		// echo var_dump($this->user_model->showUser($data['id_user'])[0]['name']);

		$rules = array(
			array(
				'field'=>'username',
				'class'=>'form-control',
				'rules'=>'required',
				'errors'=>['required'=>'Por favor, preencha o campo username']
			),
			array(
				'field'=>'commentary',
				'class'=>'form-control',
				'rules'=>'required',
				'errors'=>['required'=>'Por favor, preencha o campo commentary']

			),
		);
		
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {

			// getting comments
			$comments = $this->commentary->getComments($data['id']);
			$this->load->view('place', ['place'=>$data, 'comments'=>$comments, 'error'=>NULL, 'success'=>NULL]);

		} else {
			$db_data = [
				'name'=>$this->input->post('username'),
				'commentary'=>$this->input->post('commentary'),
				'id_place'=>$data['id']
			];

			// post a new commentary
			$this->commentary->PostCommentary($db_data);

			// getting comments
			$comments = $this->commentary->getComments($data['id']);
			$this->load->view('place', ['place'=>$data,'comments'=>$comments, 'error'=>NULL, 'success'=>'Comment with success!']);
		}

	}

}
