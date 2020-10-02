<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('layout/header') ?>

<!-- PLACE CONTENT -->
<div class="container px-5">
  <h2>
    <?php echo $place["place_name"] ?>
  </h2>
  <div class="row my-4">
    <div class="col col-sm-5 col-lg-4 col-xl-3">
      <img class="rounded w-100" src="<?php echo $place["image"] ?>" alt="<?php echo $place["place_name"] ?>">
    </div>
    <div class="col mt-3 mt-sm-0 ml-sm-3 col-xl-6 ml-xl-5">
      <p><?php echo $place["description"] ?></p>
    </div>
  </div>
  <a href="<?php echo site_url('home') ?>">Back</a>
</div>

<!-- COMMENT AREA -->
<div class="container mt-5 px-5">
  <h3>Comments</h3>
  <p>Leave your comment</p>
  <p>Required field<span class="text-danger">*</span></p>

  <?php $this->load->view('message', ['success'=>$success]); ?>  
  <?php echo form_open('home/place/'.$place["id"]); ?>

  <div class="group-form my-3">
    <?php 
    echo form_label('Username <span class="text-danger">*</span>', 'username', ['class'=>'form-check-label my-2']);
    echo form_input([
      'type'=>'text', 
      'name'=>'username', 
      'class'=>'form-control'
      ]);
    ?>
  </div>
  <div class="group-form my-3">
    <?php 
    echo form_label('Comment <span class="text-danger">*</span>', 'comment', ['class'=>'form-check-label my-2']);
    echo form_textarea([
      'name'=>'comment', 
      'class'=>'form-control', 
      'rows'=>'5'
      ]);
    ?>
  </div>

  <?php
    echo form_button(['type'=>'submit','content'=>'Comment', 'class'=>'btn btn-primary']);
    echo form_close();
  ?>
</div>

<!-- COMMENT LIST -->
<div class="container px-5">
</div>

<?php $this->load->view('layout/footer') ?>