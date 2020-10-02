<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  private $message = ['error'=>NULL, 'success'=>NULL];

  public function index() {
    $rules = [
      [
        'field'=>'name',
        'rules'=>'required',
        'errors'=>['required'=>'Please, fill the field name']
      ],
      [
        'field'=>'email',
        'rules'=>'required',
        'errors'=>['required'=>'Please, fill the field email']

      ],
      [
        'field'=>'message',
        'label'=>'MESSAGE',
        'rules'=>'required',
        'errors'=>['required'=>'Please, fill the field %s']
      ],
    ];

    $this->form_validation->set_rules($rules);

    if($this->form_validation->run() === FALSE) {
      $this->load->view('contact', ['success'=>NULL]);
    } else {
      // echo var_dump($this->input->post());
      $this->load->view('contact', ['success'=>'Send message with success!']);
    }
  }
}
