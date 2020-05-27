<ul class="projects row">
	<?php foreach($site->find('projects')->children()->listed() as $project):?>
		<li class="col-md-4">
			<article>
				<a href="<?= $project->link()?>" title="<?= $project->title()?>">
					<div class="featured-img-wrapper">
						<?php $cover = $project->cover()->toFile()?>
						<div class="featured-img" style="background-image: url('<?=$cover->url()?>')"></div>
						<div class="featured-img background"></div>
					</div>
					<h2 class="project-title"><?= $project->title()?></h2>
				</a>
				<p class="project-summary">
					<?= $project->text()->kt()?>
				</p>
			</article>
	</li>
	<?php endforeach?>
	
</ul>