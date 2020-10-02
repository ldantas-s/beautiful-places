<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('layout/header'); ?>

<h2>Contact</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, vitae!</p>
<p>Required field <span class="text-danger">*</span></p>

<?php $this->load->view('message', ['success'=>$success]) ?>


<div class="container mt-3">
  <form method="post" action="<?php echo site_url('contact') ?>" class="w-50 mt-4">
    <div class="group-form my-3">
      <label for="name">Name <span class="text-danger">*</span></label><br>
      <input class="form-control" type="text" name="name" id="name">
    </div>
    <div class="group-form my-3">
      <label for="email">E-mail <span class="text-danger">*</span></label><br>
      <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="group-form my-3">
      <label for="message">Message <span class="text-danger">*</span></label>
      <textarea class="form-control" name="message" id="message" rows='5'></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Send</button>
  </form>
</div>

<?php $this->load->view('layout/footer') ?>
