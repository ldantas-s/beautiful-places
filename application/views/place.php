<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('layout/header') ?>

<!-- PLACE CONTENT -->
<div class="container px-md-5">
  <h2>
    <?php echo $place["place_name"] ?>
  </h2>
  <div class="row my-4">
    <div class="col-12 col-md-5 ">
      <img class="rounded w-100" src="<?php echo $place["image"] ?>" alt="<?php echo $place["place_name"] ?>">
    </div>
    <div class="col-12 mt-3 mt-sm-0 ml-sm-3 col-xl-6 ml-xl-5">
      <p><?php echo $place["description"] ?></p>
      <span class="text-muted font-italic">- <?php echo $place["user"]["name"] ?></span>
    </div>
  </div>
  <a href="<?php echo site_url('home') ?>">Back</a>
</div>

<!-- COMMENT AREA -->
<div class="container mt-5 px-md-5">
  <h3>Comments</h3>
  <p>Leave your comment</p>
  <p>Required field<span class="text-danger">*</span></p>

  <!-- The message error or success -->
  <?php $this->load->view('message', ['success'=>$success]); ?>  
  <div class="row">
    <div class="col-12 col-md-6">
      <?php echo form_open('home/place/'.$place["id"]); ?>
      <div class="group-form my-3">
        <?php

        echo form_label('Username <span class="text-danger">*</span>', 'username', ['class'=>'form-check-label my-2']);
        echo form_input([
          'type'=>'text', 
          'name'=>'username', 
          'class'=>'form-control',
          'value'=> isLogged() ? $_SESSION['logged_user'][0]['name']:'',
          ]);
        ?>
      </div>
      <div class="group-form my-3">
        <?php 
        echo form_label('Comment <span class="text-danger">*</span>', 'commentary', ['class'=>'form-check-label my-2']);
        echo form_textarea(['name'=>'commentary', 'class'=>'form-control', 'rows'=>'5']);
        ?>
      </div>
      <?php
        echo form_button(['type'=>'submit','content'=>'Comment', 'class'=>'btn btn-primary']);
        echo form_close();
      ?>
    </div>
  </div>
</div>

<!-- COMMENT LIST -->
<?php if (count($comments)) : ?>
<div class="container px-md-5 mt-5">
  <ul class="list-group">
  <?php foreach($comments as $commentary): ?>
    <li class="list-group-item my-2 border">
      <p class="text-muted"><?php echo $commentary['name']; ?></p>
      <?php echo $commentary['commentary']; ?>
    </li>
  <?php endforeach ?>
  </ul>
</div>
<?php endif ?>


<?php $this->load->view('layout/footer') ?>