<div class="section-module wow fadeInUp section--alignment-<?= $module->alignment() ?>">
	<div class="group">
		<div class="col col-8">
			<p class="sub"><?= html($module->preface()) ?></p>
			<h2><?= kirbytext($module->headline()) ?></h2>
			<a href="<?= html($module->link()) ?>" class="link"><?= html($module->linktitle()) ?></a>
		</div>
	</div>
</div>