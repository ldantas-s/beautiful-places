<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function index() {
    pagePermission();

    $this->load->model('user_model');

    $userLogged = $this->user_model->showUser($_SESSION['logged_user'][0]['id'])[0];
    $userLogged['password'] = NULL;

    $rules = [
      [
        'field'=>'email',
        'rules'=>'required|valid_email',
        'errors'=>[]
      ],
    ];

    $this->form_validation->set_rules($rules);

    if (!$this->form_validation->run()) {
      $this->load->view('profile', ['userLogged'=>$userLogged, 'error'=>NULL, 'success'=>NULL]);
      return;
    } else {
      $this->load->model('user_model');
      $this->user_model->updateUser([
        'id'=> $_SESSION['logged_user'][0]['id'],
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email')
      ]);

      $_SESSION['logged_user'][0]['name'] = $this->input->post('name');
      $userLogged['name'] = $this->input->post('name');
      
    }
    $this->load->view('profile', ['userLogged'=>$userLogged, 'error'=>NULL, 'success'=>'Atualizador com sucesso!']);
    
  }
}