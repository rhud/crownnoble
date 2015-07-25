<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="pure-container" data-effect="pure-effect-slideAlong">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <main class="main container-fluid" role="main">
        <?php include Wrapper\template_path(); ?>
        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
        ?>
      </main><!-- /.main -->
    </div>
    <label class="pure-overlay" for="pure-toggle-left" data-overlay="left"></label>
    </div>
  </body>
</html>
