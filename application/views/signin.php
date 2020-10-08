<?php $this->load->view('templates/head'); ?>

<div class="container">
  <div class="row d-flex justify-content-center py-5 px-4">
    <form action="<?php site_url('signin') ?>" method="post" class="col-12  col-sm-6 col-md-5 col-lg-4 px-2">
      <a class="text-decoration-none" href="<?= site_url('home'); ?>"><h1 class="h2 my-5 text-center">Beautiful<br>Places</h1></a>
      <h2 class="h5 text-center mb-3 border-bottom border-primary pb-2 text-primary">Sign In</h2>
      
      <!-- messages -->
      <?php $this->load->view('message', ['success'=>$success]); ?>

      <div class="form-group">
        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off">
      </div>
      <button class="btn btn-primary btn-block" type="submit">Sign In</button>
      <a class="d-block text-center my-3" href="<?= site_url('signup') ?>">Sign up</a>
    </form>
  </div>
</div>


<?php $this->load->view('layout/footer'); ?>