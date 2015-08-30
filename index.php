<?php
/*
Template Name: Home Page
*/
?>

	<section id="hero-wrapper" class="full-height row">
		<div id="hero" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#hero-wrapper">
			<section id="hero-msg" class="cd-intro">
				<h1 class="cd-headline slide">
					<span class="cd-words-wrapper">
						<?php 
							$args = array( 'post_type' => 'snippets', 'cat' => 4, 'order' => 'ASC' );
							$loop = new WP_Query( $args );
							$count = 0;
							while ( $loop->have_posts() ) : $loop->the_post();
							  if($count == 0) {
							  	?>
							  	 	<b class="is-visible"><?=the_content(); ?></b>
							  	<?php
							  } else {
							  	?>
							  	 	<b><?=the_content(); ?></b>
							  	<?php
							  }
							  $count++;
							endwhile;
						?>
					</span>
				</h1>
			</section>
		</div>
	</section>
	
	
	<section id="latest" class="wrap row small">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<h1 class="gold center">Lastest Blog</h1>
					</div>
					<?php 
					$latest_post = new WP_Query("post_type=post&posts_per_page=1&orderby=date&order=DESC");
					while ( $latest_post->have_posts() ) : $latest_post->the_post();
						?>
						<a class="entry" href="<?=the_permalink();?>">
							<? the_post_thumbnail('blog-square'); ?>
							<div class="content">
								<h2><?=the_title(); ?></h2>
								<?php get_template_part('templates/entry-meta'); ?>
							</div>
						</a>
						<?php
					
					endwhile;
					?>
				</div>
				<div class="col-md-6">
					<h1 class="gold center">Important Dates</h1>
					<?php
					// Retrieve the next 3 upcoming events
					$events = tribe_get_events( array('posts_per_page' => 3, 'start_date' => new DateTime()) );
 
					// Loop through the events, displaying the title
					// and content for each
					foreach ( $events as $event ) {
						setup_postdata($event);
						?>
    					<a href="<?=tribe_get_event_link($event->ID);?>" class="event">
    						<div class="date">
    							<div class="day"><?=tribe_get_start_date($event->ID, false, 'd');?></div>
    							<div class="month"><?=tribe_get_start_date($event->ID, false, 'M');?></div>
							</div>
    						<div class="title">
    							<h3><?=$event->post_title;?> <span>More</span></h3>
    						</div>
    					</a>
    					<?
					}	
					?>
				</div>
			</div>
		</div>
	</section>

	<section id="subscribe">
		<div class="container">
			<div class="row center mailchimp">
				<h1 class="white">Subscribe to our Newsletter</h1>
				<div class="mailchimp">
					<?=do_shortcode('[mc4wp_form]');?>
				</div?
			</div>
		</div>
	</section>
	
	<section id="services" class="wrap row">
		<div class="container">
			<div class="row">
				<div class="col-xs-1 col-md-2"></div>
				<div class="col-xs-10 col-md-8">
					<div class="header wow fadeInDown" data-wow-duration="1400ms" data-wow-offset="100">
					<h1><?=get_post(54)->post_title; ?></h1></div>
					<h3 class="wow fadeInUp" data-wow-duration="1400ms" data-wow-offset="100">
					<?=get_post(54)->post_content; ?></h3>
				</div>
				<div class="col-xs-1 col-md-2"></div>
			</div>
			
			<div class="list">
				<div class="row">
					<?php 
						$args = array( 'post_type' => 'service', 'order' => 'ASC' );
						$loop = new WP_Query( $args );
						$count = 0;
						while ( $loop->have_posts() ) : $loop->the_post();
						  if($count == 6) {
							  ?>
							  	<div class="col-lg-3 col-md-4 col-sm-6 col-lg-offset-0 col-md-offset-2">
							  <?
							  } else {
							  ?>
							    <div class="col-lg-3 col-md-4 col-sm-6">
							  <?
						  }
						  ?>  
						   		<div class="service wow fadeInUp" data-wow-duration="600ms" data-wow-offset="100"  data-wow-delay="<?=get_field("fade_delay");?>ms">
						   			<a class="inner" href="<?=the_permalink(); ?>">
										<i class="icon-<?=get_field("icon");?>"></i>
										<h2><?=the_title(); ?></h2>
										<p><?=the_excerpt(); ?></p>
										<button class="button">Find Out More</button>
									</a>
								</div>
							</div>  
						  <?php
						  $count++;
						endwhile;
					?>
				</div>
			</div>
			
		</div>
	</section>
