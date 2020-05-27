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
				  <ul>
				    <?php foreach($related as $article): ?>
				    <li>
				      <a href="<?= $article->url() ?>">
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
