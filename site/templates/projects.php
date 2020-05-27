<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>
		<h2 class="col-xs-12 col-md-10 col-md-offset-1"><?= $page->title()?></h2>
		<section class="gallery col-xs-12 col-md-10 col-md-offset-1">
			<?php snippet('projects-list') ?>
		</section>
	</main>

<?php snippet('footer') ?>
