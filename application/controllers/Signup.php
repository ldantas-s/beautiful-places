<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Signup extends CI_Controller {
  
  public function index() {

    $rules = [
      [
        'field'=>'email',
        'rules'=>'required|valid_email',
        'errors'=>[],
      ],
      [
        'field'=>'password',
        'rules'=>'trim|required',
        'errors'=>[],
      ],
      [
        'field'=>'password2',
        'rules'=>'trim|required|matches[password]',
        'errors'=>[],
      ],
    ];

    $this->form_validation->set_rules($rules);

    if (!($this->form_validation->run())) {
      $this->load->view('signup', ['error'=>NULL, 'success'=>NULL]);
    } else {
      // register user
      //---------------
      $data = [
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'password'=>md5($this->input->post('password')),
      ];

      $this->load->model('user_model');
      $dataStore = $this->user_model->store($data);

      if (!$dataStore) {
        $this->load->view('signup', ['error'=>'Este email já está existe!','success'=>NULL]); 
      }
      redirect('signin'); 
    }

  }
}