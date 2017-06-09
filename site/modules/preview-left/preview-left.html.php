<div class="preview-module wow fadeInUp">

  <div class="group preview-image" data-bottom-top="transform:translateY(40px);" data-top-bottom="transform:translateY(-40px);">
    <div class="col col-5">
      <?php
      // try to get an image object      
      $image = $module->previewImage()->toFile();     
      // check if image exists     
      if($image): ?>     
      <img src="<?php echo $image->url(); ?>" alt="">      
      <?php endif ?>    
    </div>    
    <div class="col col-3"></div>
  </div>

  <div class="group preview-text">
      <div class="col col-4"></div>
      <div class="col col-3">
        <h2><?= kirbytext($module->headline()) ?></h2>
        <?= kirbytext($module->text()) ?>
        <a href="<?= html($module->link()) ?>" target="_blank" class="link"><?= html($module->linktitle()) ?></a>
      </div>
      <div class="col col-1"></div>
  </div>

</div>