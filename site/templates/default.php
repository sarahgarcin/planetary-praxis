<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>			
		<div class="content">
			<?= $page->text()->ft()?>
			<div id="related">
				<?php
				$related = $page->related()->toPages();
				if ($related->count() > 0):
				?>
				  <h3>Related</h3>
				  <ul class="row">
				    <?php foreach($related as $article): ?>
				    <li class="col-xs-4 col-md-3">

				      <a href="<?= $article->url() ?>">
				        <?php if($image= $article->cover()->toFile()):?>
				        	<div class="featured-img-wrapper">
					        	<div class="featured-img" style="background-image: url('<?=$image->url()?>')"></div>
										<div class="featured-img background"></div>
									</div>
								<?php else:?>
									<div class="featured-img-wrapper">
					        	<div class="featured-img" style=""></div>
										<div class="featured-img background"></div>
									</div>
				        <?php endif; ?>
				        <?= $article->title() ?>
				      </a>
				    </li>
				    <?php endforeach ?>
				  </ul>
				<?php endif ?>
			</div>
		</div>
		
	</main>

<?php snippet('secondnav') ?>

<?php snippet('footer') ?>
