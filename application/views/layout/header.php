<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html lang="en">
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
      <li><a href="<?php echo site_url('contact') ?>" class="nav-link">Contact</a></li>
      <li><a href="<?php echo site_url('addPlace') ?>" class="btn btn-primary">Add place</a></li>
    </ul>

    <main class="container py-5 bg-white">
    
    <?php if (isset($error) == TRUE): ?>
      <div class="alert alert-warning" role="alert">
        <?php echo $error; ?>
      </div>
    <?php elseif (isset($success)): ?> 
      <div class="alert alert-success" role="alert">
        <?php echo $success; ?>
      </div>
    <?php endif ?>



  
