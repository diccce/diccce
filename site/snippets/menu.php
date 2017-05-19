<nav role="navigation">

<div class="group">
  <div class="col col-1"></div>
    <div class="col col-6">
      <ul class="menu cf">
        <?php foreach($pages->visible() as $p): ?>
        <li>
          <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  <div class="col col-1"></div>
</div>

</nav>
