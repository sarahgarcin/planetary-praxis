<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>			
		<div class="content">
			<?= $page->text()->ft()?>
			<div class="social">
				<ul class='row'>
					<?php foreach($page->social()->toStructure() as $social):?>
						<li>
							<a href="<?=$social->url()?>" title="<?=$social->icon()?>">
								<i class="fab <?=$social->icon()?>"></i>
							</a>
						</li>
					<?php endforeach?>
				</ul>
			</div>
			<div class='about-this-website'>
				<?= $page->notes()->kt()?>
			</div>
			<div id="related">
				<?php
				$related = $page->related()->toPages();
				if ($related->count() > 0):
				?>
				  <h3>Related</h3>
				  <ul class="row">
				    <?php foreach($related as $article): ?>
				    <li class="col-xs-6 col-md-3">
				      <?php if($article->link()->isNotEmpty()):?>
				    	<a href="<?= $article->link() ?>" target="_blank">
				    	<?php else:?>
				      <a href="<?= $article->url() ?>">
				      <?php endif; ?>
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
