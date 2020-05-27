<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<section class="introduction col-md-6 col-md-offset-3">
			<?= $page->text()->kt()?>
		</section>
		<section class="news row col-md-10 col-md-offset-1">
			<?php foreach($page->news()->toStructure() as $news):?>
				<div class="featured-img-wrapper col-md-8">
					<?php $cover = $news->cover()->toFile()?>
					<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
					<div class="featured-img background"></div>
				</div>
				<div class="news-text col-md-4">
					<?= $news->text()->kt()?>
				</div>
			<?php endforeach;?>
		</section>
		<section class="gallery col-md-10 col-md-offset-1">
			<?php snippet('projects-list') ?>
		</section>

	</main>


<?php snippet('footer') ?>
