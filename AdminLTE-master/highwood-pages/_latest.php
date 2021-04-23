<?php
$table = "";
$count = 0;

if(!isset($icon)) {
  $icon_2x = <<<EOD
  <i class="fas fa-images"></i>
  EOD;
}
?>
<div class="row">
  <div class="col-md-2 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

      <div class="info-box-content">
        <span class="info-box-text font-weight-bold text-uppercase"><?php echo $table?> Count</span>
        <span class="info-box-custom-data"><?php echo $count?></span>
      </div>
    </div>
  </div>

  <div class="col-md-10 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-olive"><?php echo $icon ?></span>

      <div class="info-box-content">
        <span class="info-box-text">Last Record Data</span>
        <span class="info-box-custom-data">Lorem ipsum dolor sit amet, consectetur.</span>
      </div>
      <button type="submit" class="btn btn-info font-weight-bold mr-1 text-uppercase"><i
          class="fas fa-arrow-down"></i> Load
      </button>
      <button type="submit" class="btn btn-danger font-weight-bold mr-1 text-uppercase"><i
          class="fas fa-times"></i> Delete
      </button>
    </div>
  </div>
</div>
