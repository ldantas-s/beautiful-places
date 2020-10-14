<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php $this->load->view('layout/header'); ?>


<div class="container">
  <h2>Profile</h2>

  <div class="row py-5 px-4">
    <form action="<?= site_url('profile') ?>" method="post" class="col-12 col-sm-6 col-md-5 col-lg-4 px-2">
      
      <!-- messages -->
      <?php $this->load->view('message', ['success'=>$success,'error'=>$error]); ?>
      
      <div class="form-group">
        <label for="name" class="sr-only">Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          class="form-control" 
          placeholder="Name" 
          autocomplete="off"
          value="<?= $userLogged['name']?>"
        >
      </div>

      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input 
          type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autocomplete="off" 
          value="<?= $userLogged['email']?>"
        >
      </div>
      
      <button class="btn btn-primary" type="submit">Save</button>
    </form>
  </div>

</div>



<?php $this->load->view('layout/footer'); ?>

