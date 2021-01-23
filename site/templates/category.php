<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>
		<div class="content category">
			<?= $page->text()->ft()?>
			<?php if($page->hasChildren()):?>
			<div class="projects-gallery">
					<hr>
					<h2>Projects</h2>
					<ul class="projects row">
						<?php foreach($page->children()->listed() as $project):?>
							<li class="col-sm-6 col-md-4 col-xl-3">
								<article>
									<?php if($project->link()->isNotEmpty()):?>
										<a href="<?= $project->link() ?>" title="<?= $project->title()?>" target="_blank">
									<?php else:?>
										<a href="<?= $project->url() ?>" title="<?= $project->title()?>">
									<?php endif?>
										<div class="featured-img-wrapper">
											<?php if($cover = $project->cover()->toFile()):?>
												<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
											<?php else:?>
												<div class="featured-img" style="background-color:<?=$site->sitecolor()?>"></div>
											<?php endif;?>
											<div class="featured-img background"></div>
										</div>
										<h2 class="project-title"><?= $project->title()?></h2>
									</a>
									<div class="project-summary">
										<?= $project->summary()->kt()?>
									</div>
								</article>
						</li>
						<?php endforeach?>
					</ul>	
					<hr>
			</div>	
		<?php endif?>		
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
