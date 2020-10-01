<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<h2>New Place</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, et ex praesentium quo quae saepe!</p>
<p class="text-danger">Required field *</p>

<div class="container mt-3">
  <form class="w-50" method="post" action="<?php echo site_url('addPlace/submitnewplace') ?>">
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
      <textarea type="text" name="description" id="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Add</button>
  </form>
</div>

<?php $this->load->view('layout/footer'); ?>