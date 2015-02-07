<?php
/*
Template Name: Standard Page
*/
?>

<main>

	<section class="content">
		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
			<h1>
			  <?php echo roots_title(); ?>
			</h1>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</section>
