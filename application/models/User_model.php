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

  public function showUser($id) {
    $user = $this->db->select('name, email, updated_at')->get_where('users', ['id'=>$id])->result_array();

    if (!$user) {
      return NULL;
    }

    return $user;
  }

  public function updateUser($data) {
    extract($data);

    $updatedUser = $this->db->where('id', $id)->update('users', [
      'name'=>$name,
      'email'=>$email,
    ]);

    return $updatedUser;

  }

}