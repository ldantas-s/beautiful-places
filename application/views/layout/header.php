<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brazil Beautiful</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
  </head>
  <body class="bg-light">
    <header class="header--bgImg container p-5">
      <h1 class="header__title text-white">Brazil</h1>
      <p class="header__text text-white">País extenso famoso pelo Carnaval do Rio de Janeiro, o samba, a floresta da Amazónia e o rio Amazonas.</p>
    </header>
    <ul class="nav container d-flex justify-content-end p-3 bg-white">
      <li><a href="<?php echo site_url('home') ?>" class="nav-link">Home</a></li>
      <li><a href="<?php echo site_url('about') ?>" class="nav-link">About</a></li>
      <li><a href="<?php echo site_url('contact') ?>" class="nav-link border-right mr-2">Contact</a></li>
    <?php if (!isLogged()) : ?>
      <li><a href="<?php echo site_url('signin') ?>" class="nav-link">Sign In</a></li>
      <li><a href="<?php echo site_url('signup') ?>" class="nav-link">Sign Up</a></li>
    <?php else : ?>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['logged_user'][0]['name'] ? $_SESSION['logged_user'][0]['name']:'username'; ?>
        </a>
        <div class="dropdown-menu">
          <a href="<?php echo site_url('profile') ?>" class="dropdown-item">Profile</a>
          <a href="<?php echo site_url('addPlace') ?>" class="dropdown-item disabled">Owner Places</a>
          <a href="<?php echo site_url('addPlace') ?>" class="dropdown-item">Add place</a>
          <a href="<?php echo site_url('signin/logout') ?>" class="dropdown-item">Logout</a>
        </div>
      </li>
    <?php endif ?>

    </ul>

    <main class="container py-5 bg-white">



  
