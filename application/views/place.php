<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('layout/header') ?>

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

<?php $this->load->view('layout/footer') ?>