<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $currentdatetime = date('Y-m-d');?>
	
	<main class="row">
		<section class="introduction col-xs-12 col-md-3">
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>
		<section class="gallery col-xs-12 col-md-9">
			<ul class="projects events row">
				<?php foreach($events = $page->children()->sortBy('thedate', 'desc')->listed()->paginate(20) as $event):?>
					<li class="col-xs-12">
						<article class="row">
							<div class="event-presentation col-xs-12 col-sm-9 col-xl-6" style="border-color: <?=$site->sitecolor()?>">
								<p class="event-date" style="color: <?=$site->sitecolor()?>"><?= $event->thedate()->toDate('d/m/Y')?></p>
								<?php if($event->link()->isNotEmpty()):?>
									<a href="<?= $event->link() ?>" title="<?= $event->title()?>" target="_blank"><h2 class="event-title"><?= $event->title()?></h2></a>
								<?php else:?>
									<a href="<?= $event->url() ?>" title="<?= $event->title()?>"><h2 class="event-title"><?= $event->title()?></h2></a>
								<?php endif?>
								<?= $event->summary()->kt()?>
								<?php if($event->link()->isNotEmpty()):?>
									<p class="more-infos"><a href="<?= $event->link() ?>" title="<?= $event->title()?>" target="_blank">+ more infos</a></p>
								<?php else:?>
									<p class="more-infos"><a href="<?= $event->url() ?>" title="<?= $event->title()?>">+ more infos</a></p>
								<?php endif?>
							</div>
						</article>
				</li>	
				<?php endforeach?>
				
			</ul>
			<?php $pagination = $events->pagination() ?>
			<?php if ($pagination->hasPages()): ?>
				<nav class="pagination col-xs-12 col-sm-9 col-xl-6 row">
				  <?php if ($pagination->hasNextPage()): ?>
				  <a class="prev" href="<?= $pagination->nextPageURL() ?>">
				    ‹ older events
				  </a>
				  <?php endif ?>

				  <?php if ($pagination->hasPrevPage()): ?>
				  <a class="next" href="<?= $pagination->prevPageURL() ?>">
				    newer events ›
				  </a>
				  <?php endif ?>

				</nav>
			<?php endif ?>
		</section>
	</main>


<?php snippet('footer') ?>

