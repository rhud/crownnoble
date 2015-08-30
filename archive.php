<?php
/**
 * Template Name: Blog Archives
 */
?>

<?php get_template_part('templates/blog-header', get_post_type()); ?>

<section class="wrapper blog light">
	<div class="wrap container page" role="document">
		<div class="page inner">
			<div class="content">
				<div class="col-md-8">
					<?php
					$pageid = get_queried_object_id();
					$meta = get_post_meta( $pageid, 'WP_Catid','true' );
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array( 'posts_per_page' => 3, 'category_name' => $meta, 'paged' => $paged, 'post_type' => 'post' );
		    		
		    		$postslist = new WP_Query( $args );

		    		if ( $postslist->have_posts() ) :
		    			while ( $postslist->have_posts() ) : $postslist->the_post(); 
							?>
							<div class="entry-wrapper">
								<div class="entry">
									<div class="entry-image">
										<a href="<?php the_permalink(); ?>"><? the_post_thumbnail('blog-img'); ?></a>
									</div>
									<div class="entry-content">
										<?php get_template_part('templates/content'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>  
						<div class="clearfix"></div>
						<?php if ($postslist->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
						<nav class="prev-next-posts">
							<div class="prev-posts-link">
							  	<?php echo get_next_posts_link( 'Previous', $postslist->max_num_pages ); // display older posts link ?>
							</div>
							<div class="next-posts-link">
							  	<?php echo get_previous_posts_link( 'Next' ); // display newer posts link ?>
							</div>
						</nav>
						<?php } 
		    		endif;
		    		?>
		    	</div>
		    	<div class="col-md-4">
		    		<aside>
		    			<?php dynamic_sidebar('primary'); ?>
		    		</aside>
		    	</div>
			</div>
		</div>
	</div>
</section>			
