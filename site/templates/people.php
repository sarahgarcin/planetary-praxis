<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class="row">
		<section class=" introduction col-xs-12 col-md-3">
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>
		<section class="gallery col-xs-12 col-md-9">
			<ul class="projects row">
				<?php foreach($page->children()->listed() as $person):?>
					<li class="col-xs-12">
						<article class="row">
							<div class="featured-img-wrapper col-xs-3">
								<?php $cover = $person->photo()->toFile()?>
								<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
								<div class="featured-img background"></div>
							</div>
							<div class="person-presentation col-xs-9">
								<h2 class="person-title"><?= $person->title()?></h2>
								<p class="person-role"><?= $person->role()?></p>
								<hr>
								<?= $person->summary()->kt()?>
								<p><a href="<?= $person->url()?>" title="<?= $person->title()?>">Read more</a>
								</p>
							</div>
							
						</article>
				</li>
				<?php endforeach?>
				
			</ul>
		</section>
	</main>

<?php snippet('footer') ?>
