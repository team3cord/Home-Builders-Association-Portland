<?php

/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */










if (wpmd_is_notphone()) {




get_header('home'); ?>



		<div style="position:absolute; top:130px; left:15px;">


			<form method="post" class="searchfield"> 



				<input type="text" name="s" class="search_input" value="Search HBApdx.org" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;"  /> 



    			<input type="submit" class="search_submit" /> 



    		</form>					



		</div>



								<?php while (have_posts()) : the_post(); ?>


	<div class="main_feature">



		<div id="slider1" class="feature_img sliderwrapper">



			<!--SLIDE1-->



			<div class="contentdiv slide1">



				<h2>HBA Strength</h2>



				<h3>A network of more than<br />

				1,000 industry professionals.</h3>



			</div>

			



			<!--SLIDE2-->



			<div class="contentdiv slide2">



				<h2>HBA Support</h2>



				<h3>A valuable resource for<br />

				you and your home.</h3>


			</div>

			

			<!--SLIDE3-->



			<div class="contentdiv slide3">



				<h2>HBA Success</h2>



				<h3>Building it together<br />

				one member at a time.</h3>

			</div>	



		</div>

	</div>


								<?php endwhile;?>	




	



		<div id="container" style="margin-top:0px;">



		<div class="feature_subholder">



			<div id="paginate-slider1" class="feature_nav pagination">



				<a href="http://www.newhomesource.com/hbapdx" target="_blank"><span>New Home Search</span><br>

			  Click to find a new home</a>

				

				<a href="member-directory"><span>Member Directory</span><br>Builders, Remodelers, Contractors, and more</a>



				<a href="/events-education/home-builders-university" class="last"><span>Home Builders University</span><br>Contractor Continuing Education</a>



		  </div>		



		</div>		



			<div class="clearboth"></div>




<!-- BEGIN FEATURE THUMBS -->	

		

<div class="scroller">	

<ul id="mycarousel" class="jcarousel-skin-tango">



<li><a href="http://hbapdx.org/2014/01/hbamp-member-discount-cicp/"><img src="http://hbapdx.org/wp-content/uploads/2014/04/CICP-scroller.jpg" alt="" width="284" height="140" border="0"></a></li>

<li><a href="http://hbapdx.org/hba-top-sponsors/"><img src="http://hbapdx.org/wp-content/uploads/2014/03/Top-Sponsors.jpg" alt="" width="284" height="140" border="0"></a></li>

<li><a href="http://hbapdx.org/the-hba/member-directory/"><img src="http://hbapdx.org/wp-content/uploads/2012/03/promo-2.jpg" alt="" width="284" height="140" border="0"></a></li>

<li><a href="http://hbapdx.org/join-now/"><img src="http://hbapdx.org/wp-content/uploads/2012/03/promo-4.jpg" alt="" width="284" height="140" border="0"></a></li>

<li><a href="http://hbapdx.org/upcoming-education-classes/"><img src="http://hbapdx.org/wp-content/uploads/2012/03/promo-6.jpg" alt="" width="284" height="140" border="0"></a></li>

<li><a href="http://publications.pmgnews.com/fpubs/hba-july-2014/HBNews_July%202014_flipper.html" target="_blank"><img src="http://hbapdx.org/wp-content/uploads/2012/03/promo-7.jpg" alt="" width="284" height="140" border="0"></a></li>




</ul>

</div>

							


		

<div class="clearboth"></div>

<img src="http://hbapdx.org/wp-content/themes/HBP/images/bg_longdivider.jpg" alt="" />

			<div id="homeleft-2013">


		

<div id="Scrollbar-Container">

<img src="http://hbapdx.org/wp-content/themes/HBP/images/scroll-up.jpg" class="Scrollbar-Up" /><br />

<img src="http://hbapdx.org/wp-content/themes/HBP/images/scroll-down.jpg" class="Scrollbar-Down" />



<div class="Scrollbar-Track">

<img src="/support/scroll-img/scrollbar_handle.gif" class="Scrollbar-Handle" />

</div>

</div>

<h3 class="contentdiv" style="margin:6px 0px -6px 30px;"><a href="http://hbapdx.org/news-blog/" style=" color:#304f51; font-size:18px;">HBA News Feed</a></h3>

<div id="Scroller-1">





<div class="Scroller-Container">
<?php
	$recent_posts = wp_get_recent_posts(array('post_status' => 'publish', 'category' => 9), OBJECT); //news-slide category
?>

<?php foreach ($recent_posts as $p) { 
	setup_postdata( $p ); 
	?>
<div class="recentPost">
	<div class="title">
		<span>
			<a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a>
		</span>
	</div>
	<div class="body">
	<?php if (has_post_thumbnail()) { ?>
		<?php the_post_thumbnail(array(50, 50)); ?>
		<?php }elseif (catch_that_image($p)) { 
		
		 echo '<img src="';
		 echo catch_that_image($p);
		 echo '" alt="" />';

		 } ?>
	<p>
		<?php echo excerpt(25); ?>
	</p>
	<a class="readMore" href="<?php echo get_permalink($p->ID); ?>">READ MORE&gt;&gt;</a>
	</div>
</div>


<?php } ?>
<?php //echo do_shortcode( '[wp_rss_multi_importer showdate="0" excerptlength="20" hdsize="14px" hdweight="700" maximgwidth="50" showgroup="0" morestyle="<br><span style=color:#1861b0;>READ MORE>></span>" ]' ); ?>



</div>

</div>





			</div>	

			

			

			<div id="homeright-2013">

				<div class="featured_post">

				<?php query_posts(array('category_name' => 'featured-callout', 'showposts' => 1)); ?>  

				<?php while (have_posts()) : the_post(); ?>   

							<h2>

								Featured - <?php the_title(); ?>

							</h2>

							<div class="postthumb">

								<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array(150, 150)); ?>	</a>						

							</div>

							<div class="excerpt">

								<?php echo excerpt(42); ?>

								<br /><br /><a href="<?php the_permalink() ?>" rel="bookmark">READ MORE >></a>

							</div>

					<?php if( ($wp_query->current_post + 1) < ($wp_query->post_count) ) {echo('<div class="entry_divider"></div>');} else {echo '';}?>	

				<?php endwhile; wp_reset_query(); ?>  

				

				

				</div>

			



					



	</div>







        







        		</div><!-- #container --><?php get_footer(); ?>		<script type="text/javascript">



			featuredcontentslider.init({



				id: "slider1", //id of main slider DIV



				contentsource: ["inline", ""], //Valid values: ["inline", ""] or ["ajax", "path_to_file"]



				toc: "markup", //Valid values: "#increment", "markup", ["label1", "label2", etc]



				nextprev: ["", ""], //labels for "prev" and "next" links. Set to "" to hide.



				enablefade: [true, 0.2], //[true/false, fadedegree]



				autorotate: [true, 8000], //[true/false, pausetime]



				onChange: function(previndex, curindex){ //event handler fired whenever script changes slide



				//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)



				//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)



				}



			})



		</script>	

		<?php }else { ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title><?php wp_title() ?></title>
<LINK REL=StyleSheet HREF="<?php echo get_bloginfo('template_url'); ?>/style-home-mobile.css" TYPE="text/css" >
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>	
<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="width=device-width" />	


<?php wp_head(); ?>

	
		


 	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.mmenu.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/js/jquery.mmenu.all.css" />
<script type="text/javascript">
(function($){
  $(document).ready(function(){
 
    var current_width = $(window).width();
    //do responsive nav if < 480
    if(current_width <= 480){
       $('#menu').mmenu({
           slidingSubmenus: false
       });    
    }


    $('.menu-item-has-children > a').click(function(){
        return false; //prevent snapping to top of page for top level menu     links (mobile)
    });

   });    

})(jQuery);











</script>		
</head>
<body>
	<div id="mobile">



<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header', 'container_id'    => 'menu', 'theme_location' => 'primary' ) ); ?>
		<div id="mobileInner">
			<a class="mobile-menu"  href="#menu"></a>
			<div class="logo">
				<img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="logo" />
			</div>

			<?php echo do_shortcode('[dcwp-jquery-accordion menu="Mobile Top"]'); ?>


			<?php query_posts(array('category_name' => 'featured-callout', 'showposts' => 1)); ?>  

				<?php while (have_posts()) : the_post(); ?>   

						

		<div class="midSection">		
			<h2><?php the_title(); ?></h2>
			<div class="featured">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array(105, 105)); ?>	</a>
				 <p>
					<?php echo excerpt(42); ?>				
				</p>
			</div>
			<h3>
				<a href="<?php the_permalink() ?>">
				LEARN MORE >>
				</a>
			</h3>
		</div>	
				<?php endwhile; wp_reset_query(); ?>  
		
			<?php echo do_shortcode('[dcwp-jquery-accordion menu="Mobile Bottom"]'); ?>


<?php 
global $options;

foreach ($options as $value) {

    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }

}

?>
			<div id="socials">
			<h2>Follow Us</h2>
				<a href="<?php echo $hba_facebookURL; ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/images/facebook.png" alt="facebook" /></a>
				<a href="<?php echo $hba_twitterURL; ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/images/twitter.png" alt="twitter" /></a>
				<a href="http://www.linkedin.com/company/home-builders-association-of-metropolitan-portland"><img src="<?php echo get_bloginfo('template_url'); ?>/images/linkedin.png" alt="linkedin" /></a>
				<a href="<?php echo $hba_rssURL; ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/images/rss.png" alt="rss" /></a>
			</div>

		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>






	<?php	} ?>