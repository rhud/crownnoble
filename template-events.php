<?php
/**
 * Template Name: Event Template
 */
?>
<?php get_template_part('templates/events-header'); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="wrapper events light">
	 <div class="wrap container page" role="document">
    <div class="page inner">
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="event-wrapper">
              <div class="event">
  				<?php get_template_part('templates/content', 'page'); ?>
  			</div></div></div>
        <?php get_template_part('templates/sidebar'); ?>
      </div>
        </div>
  		</div>
  	</div>
  </section>
<?php endwhile; ?>