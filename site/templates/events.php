<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $currentdatetime = date('Y-m-d');?>
	
	<main class="row">
		<section class="introduction col-xs-12 col-md-3">
			<!-- removing archive button but keep the system -->
			<!-- <?php $archives = $page->find('archives')?>
			<?php if( $archives && $archives->children()->count() > 0):?>
				<div class="archives-btn" style='border-color: <?=$site->sitecolor()?>'>
					<a href="<?= $archives->url()?>" title="<?= $archives->title()?>">
						<?= $archives->title()?>
					</a>
				</div>
			<?php endif;?> -->
			<?php if($page->uid() == "archives"):?>
				<?php $events = $page->parent();?>
				<div class="archives-btn" style="border-color: <?=$site->sitecolor()?>"">
					<a href="<?= $events->url()?>" title="<?= $events->title()?>">
						← <?= $events->title()?>
					</a>
				</div>
			<?php endif;?>
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>
		<section class="gallery col-xs-12 col-md-9">
			<ul class="projects events row">
				<?php foreach($page->children()->sortBy('thedate', 'asc')->listed() as $event):?>
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
				<?php if($event->thedate() < $currentdatetime && $page->uid() != "archives" && $event->thedate() != null):
					$newpath = $event->parent()->find('archives')->contentFileDirectory();
					Dir::move($event->contentFileDirectory(), $newpath.'/'.$event->dirname());
				endif;?>
				<?php endforeach?>
				
			</ul>
		</section>
	</main>


<?php snippet('footer') ?>

