<?php get_template_part('templates/blog-header', get_post_type()); ?>
<section class="wrapper blog light">
	<div class="wrap container page spacer-top50" role="document">
		<div class="page inner">
			<div class="content">
				<div class="row">
					<div class="col-md-8">
						<?php get_template_part('templates/content-single', get_post_type()); ?>
					</div>
					<?php get_template_part('templates/sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</section>