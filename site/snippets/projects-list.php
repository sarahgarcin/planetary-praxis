<ul class="projects row">
	<?php foreach($site->find('projects')->children()->listed() as $project):?>
		<li class="col-sm-6 col-md-6">
			<article>
				<?php if($project->link()->isNotEmpty()):?>
					<a href="<?= $project->link() ?>" title="<?= $project->title()?>">
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