<?php
if (!isset($title) || !isset($icon_2x)) {
  $title = "Highwood";
  $icon_2x = <<<EOD
  <i class="fas fa-images fa-2x"></i>
  EOD;
}
?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <?php echo $icon_2x?>
        <h1 class="text-uppercase font-weight-bold d-inline"><?php echo $title ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
