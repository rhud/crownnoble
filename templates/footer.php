<section id="enquire" class="row">
	<div id="enquiry-form" class="col-sm-6">
		<div class="row wrapper">
			<div class="header black" data-wow-duration="400ms"><h1><?=get_post(66)->post_title; ?></h1></div>
			<p class="space top" data-wow-duration="400ms"><?=get_post(66)->post_content; ?></p>
			<div class="enquiry-form" data-wow-duration="400ms">
				<?= do_shortcode( '[contact-form-7 id="58" title="Enquiry Form"]' );?>
			</div>
		</div>
	</div>
	<div id="map" class="col-sm-6">
		<?= do_shortcode( '[google_maps id="9"]' );?>
		<div class="contact" data-wow-duration="400ms" data-wow-offset="0">
			<?=get_post(68)->post_content; ?>
		</div>
		
	</div>
</section>

<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="col-sm-6">
    	<p class="copyright">&copy; <?=date("Y");?> Crown Noble</p>
    </div>
    <div class="col-sm-6">
    	<p class="hh">Proudly developed by <a href="http://www.hellohudson.com.au" target="_blank">Hello Hudson</a></p>
    </div>
  </div>
</footer>