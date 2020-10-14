<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Model {


  public function postPlace($arData) {

    $this->db->query("INSERT INTO places(place_name, description, image, id_user) VALUES(?,?,?,?)", $arData);

  }

  public function getPlaces() {
    $query = $this->db->query('SELECT * FROM places');
    $images = [];

    foreach ($query->result_array() as $place) {
      $images[$place['place_name']] = array(
        'id' =>  $place['id'],
        'image' =>  $place['image']
      );
    }

    return $images;
  }
  
  public function getPlace($id) {
    $query = $this->db->query('SELECT * FROM places WHERE id = '.$id);

    return $query->result_array();
    
  }

}