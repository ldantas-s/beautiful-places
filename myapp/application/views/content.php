<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
<?php foreach($places as $name => $info) : ?> 

  <div class="col-12 col-lg-4 col-md-6 mb-4">
    <a class="card--hover text-decoration-none" href="<?php echo site_url('home/place/'.$info["id"]) ?>">
      <div class="card">
        <img src="<?php echo base_url('assets/images/' . $info["image"]) ?>" alt="<?php echo $name ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $name ?></h5>
        </div>
      </div>
    </a>
  </div>

<?php endforeach ?>
</div>