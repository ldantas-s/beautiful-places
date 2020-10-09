<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AddPlace extends CI_Controller {

  public function index() {

    pagePermission();

    $data = $this->input->post();

    $rules = [
      [
        'field'=>'place_name',
        'rules'=>'required',
        'errors'=>[],
      ],
      [
        'field'=>'url_image',
        'rules'=>'required',
        'errors'=>[],
      ],
    ];

    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('addPlace', ['error'=>NULL, 'success'=>NULL]);
    } else {
      $this->load->view('addPlace', ['error'=>NULL, 'success'=>'Stored with success!']);
      
      $this->load->model('place');
      $this->place->postPlace([
        $data['place_name'],
        $data['description'],
        $data['url_image'],
      ]);
    }
  }

  // public function submitNewPlace() {
  //   $data = $this->input->post();

  //   if (!$data['place_name'] || !$data['url_image']) {
  //     $this->message['error'] = 'Please, fill all fields';

  //     $this->load->view('layout/header', ['error'=>$this->message['error'], 'success'=>$this->message['success']]);
  //     $this->load->view('addPlace');
  //     return;
  //   }

  //   $this->load->model('place');
  //   $this->place->postPlace([
  //     $data['place_name'],
  //     $data['description'],
  //     $data['url_image'],
  //   ]);

  //   $this->message['error'] = NULL;
  //   $this->message['success'] = 'Added new place with success!';
    
  //   $this->load->view('layout/header', ['error'=>$this->message['error'], 'success'=>$this->message['success']]);
  //   $this->load->view('addPlace');
  // }
}
