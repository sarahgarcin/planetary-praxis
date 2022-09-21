<?php if($site->footerlogos()->isNotEmpty()):?>
	<footer>
		<ul class="partners-logos col-xs-12 row middle-xs center-xs">
			<?php
			$images =  $site->footerlogos()->toFiles();
			foreach($images as $image): ?>
				<li>
			  	<img src="<?= $image->url() ?>" alt="">
			 	</li>
			<?php endforeach ?>
		</ul>
	</footer>
<?php endif?>

</body>
</html>
