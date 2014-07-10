<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content

 * after.  Calls sidebar-footer.php for bottom widgets.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

  global $options;

foreach ($options as $value) {

    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }

}

?>

	</div><!-- #main -->



	<div id="footer" role="contentinfo">

		<div id="colophon">



<?php

	/* A sidebar in the footer? Yep. You can can customize

	 * your footer with four columns of widgets.

	 */

	get_sidebar( 'footer' );

?>





</div><!-- #wrapper -->









<div class="footer_full">

	<div class="footer">

		<div class="newsletter">

			<h3>Have a Question?</h3>

			<!--

			<form method="post" class="newsletterfield"> 

				<input type="text"class="newsletter_input" value="Full Name"/> 

				<input type="text" class="newsletter_input" value="Email Address"/> 

    			<input type="submit" class="newsletter_submit" /> 

    		</form>				-->

			<a href="<?php echo $hba_contactURL; ?>" class="contactus">HBA Flickr</a>

    		

		</div>

		

		<div class="footer_social">
		<h3>Follow Us</h3>

			<a href="<?php echo $hba_facebookURL; ?>" class="fb" target="_blank">HBA Facebook</a>

			<a href="<?php echo $hba_twitterURL; ?>" class="twitter" target="_blank">HBA Twitter</a>
			
			<a href="<?php echo $hba_rssURL; ?>" class="rss" target="_blank">HBA rss feed</a>
            
            <a href="http://www.linkedin.com/company/home-builders-association-of-metropolitan-portland" class="linkedin" target="_blank">HBA rss feed</a>

	

		</div>

			

	</div>

</div> 



	<div id="affiliates">


		

		<div class="copyright">

			&copy; Copyright 2010 Home Builders Association <span style="padding-left:90px;">Contact us at: 503-684-1880 // Email Us at: <a href="mailto:info@hbapdx.org">info@hbapdx.org</a></span>

			<ul class="links" style="float:right">

			<a href="http://www.hbapdx.org/">Home</a> | <a href="http://www.hbapdx.org/">Policies</a> | <a href="http://www.hbapdx.org/wp-content/uploads/2011/12/2011-HBAMP-Bylaws.pdf" target="_blank">By Laws</a>

			</ul>

		</div>

	</div>





<?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */



	wp_footer();

?>

<script type="text/javascript">

 

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-38948972-1']);

  _gaq.push(['_trackPageview']);

 

  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

 

</script>




	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2871413-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	</script>
    
    
    
    
    
    
    <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2871413-6']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>

</html>

