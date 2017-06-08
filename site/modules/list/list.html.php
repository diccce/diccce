<div class="list-module wow fadeInUp">
	<div class="group">
		<div class="col col-1"></div>

			<?php foreach($module->skills()->toStructure() as $module): ?>

				<div class="col col-2">
					<?php if($image = $module->icon()->toFile()): ?>
		    			<img src="<?php echo $image->url(); ?>" alt="" class="icon" data-bottom-top="transform:translateY(10px);" data-top-bottom="transform:translateY(-10px);">
		    		<?php endif; ?>

		    		<h3><?= kirbytext($module->headline()) ?></h3>
					<?= kirbytext($module->text()) ?>
				</div>

			<?php endforeach; ?>

		<div class="col col-1"></div>
	</div>
</div>