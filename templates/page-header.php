<?php use Roots\Sage\Titles; ?>

<div class="page-header">

  <div class="container">
    <h1>
      <?= Titles\title(); ?>
    </h1>
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
    </div>
  </div>

</div>
