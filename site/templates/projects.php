<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class="row">
		<section class=" introduction col-xs-12 col-md-3">
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>
		<section class="gallery col-xs-12 col-md-9">
			<?php snippet('projects-list') ?>
		</section>
	</main>

<?php snippet('footer') ?>
