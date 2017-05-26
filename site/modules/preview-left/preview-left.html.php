<div class="preview-module">

    <div class="group preview-text">
        <div class="col col-1"></div>
        <div class="col col-3">
          <h2><?= kirbytext($module->headline()) ?></h2>
          <?= kirbytext($module->text()) ?>
          <hr>
          <a href="<?= html($module->link()) ?>"><?= html($module->linktitle()) ?></a>
        </div>
        <div class="col col-4"></div>
    </div>

    <div class="group preview-image">
    	<div class="col col-2"></div>
    	<div class="col col-5">
    		<?php
		    // try to get an image object
		    $image = $module->heroimage()->toFile();
		    // check if image exists
		    if($image): ?>
		    <img src="<?php echo $image->url(); ?>" alt="">
		    <?php endif ?>
		  </div>
		  <div class="col col-1"></div>
	</div>

</div>