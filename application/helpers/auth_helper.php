<?php defined('BASEPATH') OR exit('No direct script access allowed');


function pagePermission() {
  $sessionPermission = get_instance();
  $loggedUser = $sessionPermission->session->userdata('logged_user');

  if (!$loggedUser) {
    $sessionPermission->session->set_flashdata('danger', 'Faça sign in!');
    redirect('signin');
  }
  return $loggedUser;
}


function isLogged() {
  return isset($_SESSION['logged_user'][0]) ? TRUE:FALSE;
}
