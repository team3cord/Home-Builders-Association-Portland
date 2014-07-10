<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage HBA
 * @since HBA 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />	
	<title>
	</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="title" content="Home Builders Association of Metropolitan Portland" />
	
	<meta name="author" content="Phoogoo.com">

	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/superfish.css" /> 
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/style_newsFeeder.css" /> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/style-mobile.css" />
	
	<!--[if gte IE 7]><link rel="stylesheet" type="text/css" href="/css/ie7.css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="/css/ie6.css" media="screen, projection" /><![endif]-->	
    	
	<script type="text/javascript"
src="http://w.sharethis.com/button/sharethis.js#publisher=00000000-0000-0000-0000-000000000000&type=website"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/jScrollable.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/contentslider.css" type="text/css" media="all" />
	

	
	<!-- Content Changer --> 
	<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/contentslider.js">
	/***********************************************
	* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
	* This notice MUST stay intact for legal use
	* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
	***********************************************/
	</script>
	
	<!-- Scroller Script --> 
	<!--<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/stepcarousel.js"></script>-->
	<!-- Fader Script --> 
	<!--<script src="<?php bloginfo('stylesheet_directory'); ?>/js/contentfader.js" type="text/javascript"></script> -->	
	
	
	<!-- FOOTER BAR 
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slidebox.css" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lidebox-my-own-style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slidebox.css" type="text/css" media="screen" />	
	--> 
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/forms.css" type="text/css" media="screen" />	
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slidebox.js"></script>
	<script>
	$(document).ready(function(){
		$("#slide").slideBox({width: "100%", height: "200px", position: "bottom"});
	});
	</script>
	
	
		<!-- Dropdown Scripts -->	
		<!--
	<script type="text/javascript" src="<?php //bloginfo('template_url'); ?>/js/superfish.js"></script> 
	<script type="text/javascript"> 
    $(document).ready(function() { 
        $('ul.sf-menu').superfish({ 
            delay:       100,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'fast',                          // faster animation speed 
            autoArrows:  true,                           // disable generation of arrow mark-up 
            dropShadows: false                            // disable drop shadows 
        }); 
    }); 
	</script>	-->
		<!-- Cufon Scripts -->	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ChunkFive_400.font.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/MgOpen_Moderna_400-MgOpen_Moderna_700.font.js"></script>
	<script type="text/javascript">
			Cufon.replace('h1', { fontFamily: 'MgOpen Moderna' });
			Cufon.replace('h2', { fontFamily: 'ChunkFive' });
			Cufon.replace('h3', { fontFamily: 'ChunkFive' });
			Cufon.replace('h2.title a', {hover: true});
			Cufon.replace('.feature_nav a', { fontFamily: 'ChunkFive', hover: true});
			Cufon.replace('.cufon', { fontFamily: 'ChunkFive', hover: true });
	</script>	

	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	
	
	
	
	
	
 	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.mmenu.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/js/jquery.mmenu.all.css" />
	
	
	
	
	
	
	<style type="text/css">
<!--

.displace {
position: absolute;
left: -5000px;
}



#Scroller-1 {
position: absolute;
  top: 30px; left: 30px; 
  overflow: hidden;
  width: 380px;
  height: 147px;
}

.Scroller-Container {
  position: absolute;
  top:0px; left:0px;
}
#Scrollbar-Container {
position: absolute;
top: 0px; left: 196px;
}
.Scrollbar-Up {
margin:0px 0px 163px 0px;
}

.Scrollbar-Down {
margin:0px;
}
.Scrollbar-Track {
  width: 20px; height: 232px;
}
.Scrollbar-Handle {
cursor:pointer;
  position: relative;
  width: 0px; height: 0px;
}


-->
</style>

<script type="text/javascript" src="http://hbapdx.hbaadmin.com/support/scroll-img/jsScroller.js"></script>
<script type="text/javascript" src="http://hbapdx.hbaadmin.com/support/scroll-img/jsScrollbar.js"></script>


<script type="text/javascript">
var scroller  = null;
var scrollbar = null;
window.onload = function () {
  scroller  = new jsScroller(document.getElementById("Scroller-1"), 400, 200);
  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
}

</script>	

	
	
	
	
	
	
	
	
	
	

<script type="text/javascript" src="http://hbapdx.hbaadmin.com/includes/lib/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="http://hbapdx.hbaadmin.com/includes/skins/tango/skin.css">
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
       wrap: 'circular'

    });
});

</script>
	
	
	
<script type="text/javascript">
		
		</script>

<script type="text/javascript">

(function($){
  $(document).ready(function(){


//do responsive nav if < 480
    var current_width = $(window).width();
    if(current_width <= 480){
        	jQuery(function() {
				jQuery('#menu').mmenu({
					slidingSubmenus: false
				});

  });
    }
  });



})(jQuery);











</script>		

	
 </head>
 
 
 
 
 <body <?php body_class(); ?>>
 

<div id="header_networks">
<ul class="hba_network">
<li><a href="http://www.hbapdx.org/" class="hba">HBAo</a></li>
<li><a href="http://www.buildhopepdx.org" target="_blank" class="hbf">HBF</a></li>
<li><a href="http://hbapro.org" target="_blank" class="hbapro">HBA Pro</a></li>
<li><a href="http://hbapdx.org/home-performance-council-pdx/" class="bgc">HPC</a></li>
<li><a href="/sales-and-marketing-council-smc/" class="smc">SMC</a></li>
<li><a href="http://www.ultimateopenhouse.net/" target="_blank" class="uoh">UOH</a></li>
<li><a href="http://www.remodeltourportland.com/" target="_blank" class="trh">TRH</a></li>
<li><a href="http://www.streetofdreamspdx.com/" target="_blank" class="sod">SOD</a></li>
<li><a href="http://www.otshows.com/pfhs/" target="_blank" class="hg">HG</a></li>
<li><a href="http://buildrightconference.com/" target="_blank" class="ecovative">Build Right Conference</a></li>
<li class="last"><a href="http://www.celebratecateringpdx.com/" target="_blank" class="calebrate">Celebrate</a></li>
</ul>


	</div>
	
<!-- LOGO/NAV ====================================== -->
 <div id="header"> 
 		<ul class="sf-menu"> 
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header', 'container_id'    => 'menu', 'theme_location' => 'primary' ) ); ?>
 		</ul> 
		<div style="border-bottom:#4f8ac2 2px solid; height:2px; margin-top:40px; width:980px;"></div>

 		
		
		
		
		
		
		 <!-- UTILITY NAV ====================================== -->
 	<div style="z-index:4; position:absolute; top:203px; right:0px; width:343px; height:27px; background-image:url(http://hbapdx.hbaadmin.com/wp-content/themes/HBP/images/secondary-nav-bg.jpg); background-repeat:no-repeat;">
	 	<div style="margin:7px 30px 0px 0px;">
	 	  <ul class="small_nav">
	 	    <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header', 'theme_location' => 'utility' ) ); ?>
	 	    </ul>
 	  </div>
 	</div>
	
	
	   </div> 
 	

	
	
 <!-- BEGIN CONTENT ====================================== -->
	<div class="wrapper">
	<a class="mobile-menu"  href="#menu"></a>

	
