<div class="nav col-xs-4">

	<input type="checkbox" id="toggle-menu" name="toggle-menu" value="menu-visibility" hidden />
  <label for="toggle-menu">
    <span class="span-nochecked" aria-label="open Menu">
        menu
    </span>
    <span class="span-checked" aria-label="close Menu">
        close
    </span>
  </label>

	<nav class="main-nav col-xs-12" role="navigation">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	      </li>
			<?php endforeach; ?>
		</ul>
		<div class="searchbar">
			<?php 
			$query   = get('q');
			?>
			<form action= <?= ($p = page('search')) ? $p->url() : '' ?>>
			  <input type="search" name="q" value="<?= html($query) ?>" placeholder="Search…">
			  <input type="submit" value="Ok">
			</form>
		</div>

	</nav>

</div>




  
