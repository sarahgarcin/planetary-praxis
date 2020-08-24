<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class='row'>
		<section class="introduction col-xs-12 col-md-4">
			<?= $page->text()->kt()?>
		</section>
		<section class="news col-xs-12 col-md-8 row">
			<?php foreach($page->news()->toStructure() as $news):?>
				<article class="col-xs-12 col-md-6">
					<div class="featured-img-wrapper">
						<?php $cover = $news->cover()->toFile()?>
						<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
						<div class="featured-img background"></div>
					</div>
					<div class="news-text">
						<?= $news->text()->kt()?>
					</div>
				</article>
			<?php endforeach;?>
		</section>
<!-- 		<section class="gallery col-md-10 col-md-offset-1">
			<?php //snippet('projects-list') ?>
		</section> -->

	</main>


<?php snippet('footer') ?>
