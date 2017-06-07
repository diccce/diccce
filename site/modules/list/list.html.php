<div class="list-module">
	<div class="group">
		<div class="col col-1"></div>
		<div class="col col-2">
			<?php
		    // try to get an image object
		    $image = $module->icon()->toFile();
		    // check if image exists
		    if($image): ?>
		    <img src="<?php echo $image->url(); ?>" alt="" class="icon">
		    <?php endif ?>

			<h3><?= kirbytext($module->headline()) ?></h3>
			<?= kirbytext($module->text()) ?>
		</div>
		<div class="col col-1"></div>
	</div>
</div>