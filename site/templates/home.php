<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class='row'>
		<section class="introduction col-xs-12 col-md-4">
			<?= $page->text()->kt()?>
		</section>
		<?php if($page->news()->isNotEmpty()):?>
			<section class="news col-xs-12 col-md-8 row">
				<?php foreach($page->news()->toStructure() as $news):?>
					<article class="col-xs-12 col-md-6">
						<?php if($news->link()->isNotEmpty()):?>
						<a href="<?= $news->link() ?>" title="<?= $news->title() ?>">
						<?php endif;?>
							<?php if($news->cover()->isNotEmpty()):?>
								<div class="featured-img-wrapper">
									<?php $cover = $news->cover()->toFile()?>
									<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
									<div class="featured-img background"></div>
								</div>
							<?php endif;?>
							<div class="news-text">
								<?= $news->text()->kt()?>
							</div>
						<?php if($news->link()->isNotEmpty()):?>
						</a>
						<?php endif;?>
					</article>
				<?php endforeach;?>
			</section>
		<?php endif;?>

	</main>


<?php snippet('footer') ?>
