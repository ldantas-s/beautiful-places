<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Signin extends CI_Controller {
  
  public function index() {

    $error = isset($_SESSION['danger']) ? $_SESSION['danger']:NULL;

    $rules = [
      [
        'field'=>'email',
        'rules'=>'required',
        'errors'=>[],
      ],
      [
        'field'=>'password',
        'rules'=>'required',
        'errors'=>[],
      ]
    ];

    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('signin', ['error'=>$error, 'success'=>NULL]);
    } else {

      $userInfo = [
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
      ];

      $this->load->model('user_model');
      $user = $this->user_model->getUser($userInfo);
    
      if (!$user) {
        $this->load->view('signin', ['error'=>'Verifique se os dados estão corretos', 'success'=>NULL]);
        return;
      }
      $this->session->set_userdata('logged_user', $user);
      // $this->session->set_flashdata('successSignin', 'Sign in com sucesso!');
      redirect('home');
    }

  }
  
  public function logout() {
    $this->session->unset_userdata('logged_user');
    redirect('home');
  }
}