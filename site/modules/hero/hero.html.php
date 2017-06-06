<div class="hero-module scene_element scene_element--delayed scene_element--fadeindown">
	<div class="group">
		<div class="col col-8">
			<p class="sub"><?= html($module->preface()) ?></p>
		</div>
	</div>

	<div class="group">
		<div class="col col-8">
			<h1><?= kirbytext($module->hero()) ?></h1>
		</div>
	</div>
	
	<div class="group">
		<div class="col col-1"></div>
		<div class="col col-7">
			<a href="<?= html($module->link()) ?>" class="link"><?= html($module->linkTitle()) ?></a>
		</div>
	</div>
</div>