<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<h1 class="subtitle"><?php the_title(); ?></h1>	
	
	<?php
	/**
	 * If/Else for Custom Field.
	 *
	 * If no Sub Headline Custom Field is
	 * applied it will default to text below
	 *
	 */	 
	?>
	<?php $SubHeadline = get_post_meta($post->ID, 'Sub Headline', true); ?>
	<?php if ($SubHeadline != '') { ?>
		<h2 class="subheader"><?php echo $SubHeadline; ?></h2>
	<?php }else{ ?>
		<h2 class="subheader">Home Builders Association</h2>
	<?php } ?>
	
		<div id="container mc" class="sub">
			<div class="mainCol">
				<?php the_content(); ?>
				
				<div class="share">
					<h2>Share &amp; Print</h2>
					<?php if(function_exists('wp_email')) { email_link(); } ?>
					<?php if(function_exists('wp_print')) { print_link(); } ?>  
					
					<script language="javascript" type="text/javascript">
					//Create your sharelet with desired properties and set button element to false
					var object = SHARETHIS.addEntry({
					title:'Here is an interesting article from hbapdx.org:',
					summary: 'More info on hbapdx.org'},
					{button:false});
					//Output your customized button
					document.write('<span id="share"><a href="javascript:void(0);" class="share_btn">Share</a></span>');
					//Tie customized button to ShareThis button functionality.
					var element = document.getElementById("share");
					object.attachButton(element);
					</script>
					
				</div>
				
			</div>
			<?php endwhile; ?>

		<?php get_sidebar(); ?>
        
        


		</div><!-- #container -->


<?php get_footer(); ?>



