<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>
	<div class="content">			
			<div class="person-header-text">
				<div class="featured-img-wrapper">
					<?php $cover = $page->photo()->toFile()?>
					<div class="featured-img col-xs-6 col-md-4" style="background-image: url('<?=$cover->url()?>')"></div>
				</div>
				<div class="person-text">
					<h1><?= $page->title()?></h1>
					<p class="person-role"><?= $page->role()?></p>
					<p class="person-email">
						<a href="mailto:<?= $page->email()?>"><?= $page->email()?></a>
					</p>
					<?php $links = $page->links()->toStructure();
					foreach($links as $link):?>
						<p>
							<a href="<?= $link->link()?>" title="<?= $link->text()?>">
								<?= $link->text()?>
							</a>
						</p>
					<?php endforeach?>
				</div>
			</div>
			
				<?= $page->text()->kt()?>
			</div>
		
	</main>


<?php snippet('footer') ?>
