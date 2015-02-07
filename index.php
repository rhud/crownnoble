<?php
/*
Template Name: Home Page
*/
?>

<main>

	<section id="hero-wrapper" class="full-height">
		<div id="hero" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#hero-wrapper">
			<section id="hero-msg" class="cd-intro">
				<h1 class="cd-headline slide">
					<span class="cd-words-wrapper">
						<?php 
							$args = array( 'post_type' => 'snippets', 'cat' => 3, 'order' => 'ASC' );
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
	
	
	<section id="about" class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-1 col-md-2"></div>
				<div class="col-xs-10 col-md-8">
					<div class="header wow fadeInDown" data-wow-duration="1400ms" data-wow-offset="100"><h1><?=get_post(55)->post_title; ?></h1></div>
					<div class="wow fadeInUp" data-wow-duration="1400ms" data-wow-offset="100">
					<?=get_post(55)->post_content; ?>
					</div>
				</div>
				<div class="col-xs-1 col-md-2"></div>
			</div>
		</div>
	</section>
	
	<section id="services" class="wrap">
		<div class="container">
			<div class="header wow fadeInDown" data-wow-duration="1400ms" data-wow-offset="100"><h1><?=get_post(54)->post_title; ?></h1></div>
			<h3 class="wow fadeInUp" data-wow-duration="1400ms" data-wow-offset="100"><?=get_post(54)->post_content; ?></h3>
			<div class="list">
				<div class="row">
					<?php 
						$args = array( 'post_type' => 'services', 'order' => 'ASC' );
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
									<i class="icon-<?=get_field("icon");?>"></i>
									<h2><?=the_title(); ?></h2>
									<p><?=the_excerpt(); ?></p>
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