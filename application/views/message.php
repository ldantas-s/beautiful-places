<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php if (isset($success)) : ?>
  <div class="alert alert-success">
    <?php echo $success; ?>
  </div>
<?php elseif (isset($error)) : ?>
  <div class="alert alert-warning">
    <?php echo $error; ?>
  </div>
<?php else : echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<?php endif ?>

