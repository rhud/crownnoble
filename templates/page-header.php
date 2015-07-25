<?php use Roots\Sage\Titles; ?>

<?php
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
$slug = $post->post_name;
?>    
<div class="page-header <?=$slug; ?>" style="background-image: url(<?=wp_get_attachment_url( get_post_thumbnail_id( $post->ID, 'large' ) ); ?>);">
	<div class="header"><h1><?= Titles\title(); ?></h1></div>
</div>  






