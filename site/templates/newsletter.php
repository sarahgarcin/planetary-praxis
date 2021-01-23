<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class="row">
		<section class="introduction col-xs-12 col-md-3">
			<h1><?= $page->title()?></h1>
			<?= $page->text()->kt()?>
		</section>			
		<section class="newsletter-form col-xs-12 col-sm-9 col-md-5">
			<div id="mc_embed_signup">
			<form action="https://planetarypraxis.us10.list-manage.com/subscribe/post?u=3a6081955cf06dc26006322db&amp;id=2c535747bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
				<h2>Subscribe to the newsletter</h2>
<!-- 			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk" style="color:<?= $site->sitecolor()?>">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3a6081955cf06dc26006322db_2c535747bf" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			    <p class="last-news">
			    	<!-- remplacer le liens  -->
						<a href="https://us10.campaign-archive.com/home/?u=3a6081955cf06dc26006322db&id=2c535747bf" title="Go to previous newsletters" target="_blank">Go to previous newsletters</a>
					</p>
			</form>
			</div>

			<!--End mc_embed_signup-->

		</section>
		
	</main>



<?php snippet('footer') ?>
