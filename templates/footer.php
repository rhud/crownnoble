	<section id="enquire">
		<div id="enquiry-form" class="col-sm-6">
			<div class="row wrapper">
				<div class="header black wow fadeInLeft" data-wow-duration="1400ms"><h1><?=get_post(66)->post_title; ?></h1></div>
				<p class="space top wow fadeInLeft" data-wow-duration="1400ms"><?=get_post(66)->post_content; ?></p>
				<div class="enquiry-form wow fadeInLeft" data-wow-duration="1400ms">
					<?= do_shortcode( '[contact-form-7 id="58" title="Enquiry Form"]' );?>
				</div>
			</div>
		</div>
		<div id="map" class="col-sm-6">
			<?= do_shortcode( '[google_maps id="9"]' );?>
			<div class="contact wow fadeInRight" data-wow-duration="1400ms" data-wow-offset="0">
				<?=get_post(68)->post_content; ?>
			</div>
			
		</div>
	</section>

</main>

<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="col-sm-6">
    	<p>&copy; <?=date("Y");?> Crown Noble</p>
    </div>
    <div class="col-sm-6">
    	<p class="right">Proudly developed by <a href="http://www.hellohudson.com.au" target="_blank">Hello Hudson</a></p>
    </div>
  </div>
</footer>
</div>
<label class="pure-overlay" for="pure-toggle-left" data-overlay="left"></label>
