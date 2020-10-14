<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('templates/head'); ?>

<div class="container">
  <div class="row d-flex justify-content-center py-5 px-4">
    <form action="<?= site_url('signup') ?>" method="post" class="col-12 col-sm-6 col-md-5 col-lg-4 px-2">
      <a href="<?= site_url('home'); ?>"><h1 class="h2 my-5 text-center">Beautiful<br>Places</h1></a>
      <h2 class="h5 text-center mb-3 border-bottom border-primary pb-2 text-primary">Sign Up</h2>
      
      <!-- messages -->
      <?php $this->load->view('message', ['success'=>$success,'error'=>$error]); ?>
      
      <div class="form-group">
        <label for="name" class="sr-only">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autocomplete="off">
      </div>
      
      <div class="form-group">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="confirmPass" class="sr-only">Confirm password</label>
        <input type="password" name="password2" id="confirmPass" class="form-control" placeholder="Confirm password" autocomplete="off">
      </div>
      <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
      <a class="d-block text-center my-3" href="<?= site_url('signin') ?>">Sign In</a>
    </form>
  </div>
</div>



<?php $this->load->view('layout/footer'); ?>