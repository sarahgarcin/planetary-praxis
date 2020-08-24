<!-- DESKTOP LOGO -->
<div class="logo-wrapper col-xs-8">
	<h1 class="logo">
		<a href="<?=$site->url()?>" title="<?=$site->title()?>">
			<?php $logo = $site->logo()->toStructure()->first() ?>
			<span><?= $logo->first()?></span><span class="sign">&thinsp;<?= $logo->sign()?>&thinsp;</span><span><?= $logo->second()?></span>
			<?php if($page->intendedTemplate() == "home"):?>
				<span class="chapeau">
					<?= $site->subtitle() ?>
				</span>
			<?php endif?>
		</a>
	</h1>
</div>