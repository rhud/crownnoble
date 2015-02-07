<div class="pure-container" data-effect="pure-effect-slideAlong">	
	<input type="checkbox" id="pure-toggle-left" class="pure-toggle mobile-only" data-toggle="left"/>
	<label class="pure-toggle-label mobile-only" for="pure-toggle-left" data-toggle-label="left"><span class="pure-toggle-icon"></span></label>
	<nav class="pure-drawer top <?= (is_front_page() ? "home" : "page");?>" data-position="left">
		<div class="container">
	    <a class="navbar-brand desktop-only logo white" href="<?php echo esc_url(home_url('/')); ?>"></a>
	    	<?php
	    	  if (has_nav_menu('primary_navigation')) :
	    	    wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
	    	  endif;
	    	?>
	    </div>
	</nav>  
	
	<div class="pure-pusher-container">
	
		<header class="banner navbar navbar-default navbar-static-top mobile-only <?= (is_front_page() ? "home" : "page");?>" role="banner">
		  	<div class="container">
		    	<div class="navbar-header">
		      		<a class="navbar-brand mobile-only logo white" href="<?php echo esc_url(home_url('/')); ?>"></a>
		    	</div>
			</div>
		</header>
