<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main>			
		<div class="content search">
			<?php $query = get('q');?>
			<h1>Search for '<?= $query?>'</h1>
			<ul>
			  <?php foreach ($results as $result): ?>
			  <li>
			    <a href="<?= $result->url() ?>">
			      <?= $result->title() ?>
			    </a>
			  </li>
			  <?php endforeach ?>
			</ul>
			<?php if($results->count() < 1):?>
				<p>Sorry there is no result for your search</p>
			<?php endif;?>

		</div>
		
	</main>



<?php snippet('footer') ?>
