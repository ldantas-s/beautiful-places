<?php defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model {
  
  
  public function getUser($userInfo) {
    extract($userInfo);

    $user = $this->db->get_where('users', ['email'=> $email, 'password'=>md5($password)])->result_array();

    return $user;

  }
  
  public function store($data) {
    $userExist = $this->db->get_where('users', ['email'=>$data['email']])->result_array();
    if($userExist) {
      return [];
    }
  
    return $this->db->insert('users', $data);

  }

}