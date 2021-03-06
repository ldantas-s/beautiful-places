<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('layout/header'); ?>


<h2>New Place</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, et ex praesentium quo quae saepe!</p>
<p>Required field <span class="text-danger">*</span></p>

<?php $this->load->view('message', ['success'=>$success]); ?>

<div class="container mt-3">
  <div class="row">
    <div class="col-12 col-md-6">
      <form method="post" action="<?php echo site_url('addPlace') ?>">
        <div class="group-form my-3">
          <label for="place_name">Name <span class="text-danger">*</span></label>
          <input type="text" name="place_name" id="place_name" class="form-control">
        </div>
        <div class="group-form my-3">
          <label for="url_image">url <span class="text-danger">*</span></label>
          <input type="text" name="url_image" id="url_image" class="form-control">
        </div>
        <div class="group-form my-3">
          <label for="description">Description</label>
          <textarea type="text" name="description" id="description" class="form-control" rows="5"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Add</button>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>