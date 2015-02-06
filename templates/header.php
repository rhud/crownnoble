<div class="pure-container" data-effect="pure-effect-slideAlong">	
	<input type="checkbox" id="pure-toggle-left" class="pure-toggle mobile-only" data-toggle="left"/>
	<label class="pure-toggle-label mobile-only" for="pure-toggle-left" data-toggle-label="left"><span class="pure-toggle-icon"></span></label>
	<nav class="pure-drawer top" data-position="left">
		<div class="container">
	    <a class="navbar-brand desktop-only logo white" href="<?php echo esc_url(home_url('/')); ?>"></a>
	    <ul>
	    	<li><a class="icon" href="#">Home</a></li>
	    	<li><a class="icon" href="#">About</a></li>
	    	<li><a class="icon" href="#">Services</a></li>
	    	<li><a class="icon" href="#">Business Packages</a></li>
	    	<li><a class="icon" href="#">Xero</a></li>
	    	<li><a class="icon" href="#">Blog</a></li>
	    	<li><a class="icon" href="#">Contact</a></li>
	    </ul>
	    </div>
	</nav>  
	
	<div class="pure-pusher-container">
	
			<header class="banner navbar navbar-default navbar-static-top mobile-only" role="banner">
			  <div class="container">
			    <div class="navbar-header">
			      <a class="navbar-brand mobile-only logo white" href="<?php echo esc_url(home_url('/')); ?>"></a>
			    </div>
			
			    <!--<nav class="collapse navbar-collapse" role="navigation">
			      <?php
			        if (has_nav_menu('primary_navigation')) :
			          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
			        endif;
			      ?>
			    </nav>-->
			    
			  </div>
			</header>
