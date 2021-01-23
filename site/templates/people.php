<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class="row">
		<section class="introduction col-xs-12 col-md-3">
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>
		<?php 
			//$bool = $page->children()->listed()->prevsection()->toBool();
			$people = $page->children()->listed()->filterBy('prevsection', false); 
			$prevPeople = $page->children()->listed()->filterBy('prevsection', true);
		?>
		<section class="gallery col-xs-12 col-md-9">
			<ul class="projects row">
				<?php foreach($people as $person):?>
					<li class="col-xs-12">
						<article class="row">
							<?php if($cover = $person->photo()->toFile()):?>
								<div class="featured-img-wrapper col-xs-8 col-sm-3">
									<a href="<?= $person->url()?>" title="<?= $person->title()?>">
										<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
										<div class="featured-img background"></div>
									</a>
								</div>
							<?php endif?>
							<div class="person-presentation col-xs-12 col-sm-9 col-xl-6">
								<h2 class="person-title"><?= $person->title()?></h2>
								<p class="person-role"><?= $person->role()?></p>
								<hr>
								<?= $person->summary()->kt()?>
								<p class="read-more"><a href="<?= $person->url()?>" title="<?= $person->title()?>">Read more</a>
								</p>
							</div>
							
						</article>
					</li>
				<?php endforeach?>
				
			</ul>
			<?php if($prevPeople->count() > 0):?>
				<hr>
			<?php endif; ?>
		</section>
		
		<?php if($prevPeople->count() > 0):?>
			<section class="gallery col-xs-12 col-md-9 col-md-offset-3">
				<h2 class="previous">Previous Researchers / Contributors</h2>
				<ul class="projects row">
					<?php foreach($prevPeople as $person):?>
						<li class="col-xs-12">
							<article class="row">
								<?php if($cover = $person->photo()->toFile()):?>
									<div class="featured-img-wrapper col-xs-8 col-sm-3">
										<a href="<?= $person->url()?>" title="<?= $person->title()?>">
											<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
											<div class="featured-img background"></div>
										</a>
									</div>
								<?php endif?>
								<div class="person-presentation col-xs-12 col-sm-9 col-xl-6">
									<h2 class="person-title"><?= $person->title()?></h2>
									<p class="person-role"><?= $person->role()?></p>
									<hr>
									<?= $person->summary()->kt()?>
									<p class="read-more"><a href="<?= $person->url()?>" title="<?= $person->title()?>">Read more</a>
									</p>
								</div>
								
							</article>
					</li>
					<?php endforeach?>
					
				</ul>
			</section>
		<?php endif; ?>
	</main>

<?php snippet('footer') ?>
