<div class="text-module">
	<div class="group">
		<div class="col col-1"></div>
		<div class="col col-3">
			<h3><?= kirbytext($module->headline()) ?></h3>
		</div>
		<div class="col col-4"></div>
	</div>
	
	<div class="group">
		<div class="col col-3"></div>
		<div class="col col-4 wow fadeInUp">
			<?= kirbytext($module->text()) ?>
		</div>
		<div class="col col-1"></div>
	</div>
</div>