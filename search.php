<?php get_template_part('templates/search', 'header'); ?>
<section class="wrapper blog light">
	<div class="wrap container page" role="document">
		<div class="page inner">
			<div class="content">
				<div class="row">
					<div class="col-md-8">
						<?php if (!have_posts()) : ?>
						  <div class="alert alert-warning">
						    <?php _e('Sorry, no results were found.', 'sage'); ?>
						  </div>
						  <?php get_search_form(); ?>
						<?php endif; ?>

						<?php while (have_posts()) : the_post(); ?>
						  <div class="entry-wrapper">
							<div class="entry">
								<div class="entry-content">
									<?php get_template_part('templates/content', 'search'); ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

			    	</div>
		    		<?php get_template_part('templates/sidebar'); ?>
		    	</div>
			</div>
		</div>
	</div>
</section>			

