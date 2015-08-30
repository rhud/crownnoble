<div class="entry-wrapper">
  <div class="full-entry">

<?php while (have_posts()) : the_post(); ?>
  <div class="entry-image">
        <? the_post_thumbnail('blog-img'); ?>
      </div>
    <div class="entry-content">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <?php the_content(); ?>
    </div>
    <?php // comments_template('/templates/comments.php'); ?>
  
<?php endwhile; ?>
</div>
</div>