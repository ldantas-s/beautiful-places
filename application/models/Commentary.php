<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Commentary extends CI_Model {

  public function getComments($id_place) {
    $query = $this->db
      ->select('*')
      ->from('comments')
      ->where('id_place', $id_place)
      ->get();
    
    if (!count($query->result())) {
      return;
    }

    return $query->result_array();
  }
  
  public function PostCommentary($data) {
    $this->db->insert('comments', $data);
  }

}