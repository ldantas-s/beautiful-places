<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
      $this->load->view('contact', ['error'=>NULL, 'success'=>NULL]);
    } else {
      $info = $this->input->post();
      // $this->load->library('email');
      $this->load->library('emails');

      $message = 
        "The message was send of the Beautiful Places<hr>".
        "<strong>Name:</strong>".$info['name']."<br>".
        "<strong>Email:</strong>".$info['email']."<br>".
        "<strong>Message:</strong>".$info['message']."<hr>";



      if ($this->emails->sendEmail($info['email'], $message)) {
        $this->load->view('contact', ['error'=>NULL, 'success'=>'Send message with success!']);
      } else {
        $this->load->view('contact', ['error'=>'One problem at the send email', 'success'=>NULL]);
      }


    }
  }
}
