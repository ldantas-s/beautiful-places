<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  private $message = ['error'=>'', 'success'=>''];

  public function index() {
    $this->load->view('layout/header', ['error'=>$this->message['error'], 'success'=>$this->message['success']]);
    $this->load->view('contact');
    $this->load->view('layout/footer');
  }

  public function submitForm() {
    $data = $this->input->post();
    // one way to do this
    $email = $this->input->post('email');
    
    
    if (!$email) {
      $this->message['error'] = "Please, fill you email";
      
      $this->load->view('layout/header', ['error'=>$this->message['error'], 'success'=>$this->message['success']]);
      $this->load->view('contact');
      $this->load->view('layout/footer');
      return;
    }

    $this->message['error'] = '';
    $this->message['success'] = 'Send message with success!';
    
    $this->load->view('layout/header', ['error'=>$this->message['error'], 'success'=>$this->message['success']]);
    $this->load->view('contact');
    $this->load->view('layout/footer');

    // database
    echo var_dump($data);
  }
}
