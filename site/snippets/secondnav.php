<div class="menu-secondaire">
	<ul class="row">
<!-- 		<li><a href="#related" title="">Related</a></li>
		<li><a href="#footnotes" title="">Notes</a></li> -->
		<?php
		$related = $page->related()->toPages();
		if ($related->count() > 0):?>
			<input type="checkbox" id="toggle-related" name="toggle-related" value="related-visibility" hidden />
			<label for="toggle-related">
		    <li class="span-nochecked" aria-label="open related menu">
		        Related
		    </li>
		    <li class="span-checked" aria-label="close related menu">
		        Related
		    </li>
	    </label>
			<div class="related-window">
				<ul>
				    <?php foreach($related as $article): ?>
				    <li>
				      <a href="<?= $article->url() ?>">
				        <?php if($image= $article->cover()->toFile()):?>
				        	<div class="featured-img-wrapper">
					        	<div class="featured-img" style="background-image: url('<?=$image->url()?>')"></div>
										<div class="featured-img background"></div>
									</div>
								<?php else:?>
									<div class="featured-img-wrapper">
					        	<div class="featured-img" style=""></div>
										<div class="featured-img background"></div>
									</div>
				        <?php endif; ?>
				        <?= $article->title() ?>
				      </a>
				    </li>
				    <?php endforeach ?>
				  </ul>
			</div>
		<?php endif; ?>
			<input type="checkbox" id="toggle-footnotes" name="toggle-footnotes" value="footnotes-visibility" hidden />
			<label for="toggle-footnotes">
		    <li class="span-nochecked" aria-label="open footnotes menu">
		        Notes
		    </li>
		    <li class="span-checked" aria-label="close footnotes menu">
		        Notes
		    </li>
	    </label>
		<div class="footnotes-window">
			<?= $page->text()->onlyFootnotes();?>
		</div>
		
	</ul>
</div>