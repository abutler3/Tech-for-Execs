<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
    <header>
  <div id="top">
  <h1><img src="<?php echo get_template_directory_uri(); ?> /logo-red-dropshadow.jpg" alt="logo" /></h1>
  
   <ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="video.html">VIDEO</a></li>
    <li><a href="aboutus.html">ABOUT</a></li>
    <li><form method="get" id="searchform">
			<!-- 		<label for="s" class="assistive-text">Search</label> -->
					<input type="text" class="field" name="s" id="s" placeholder="Search Our Videos" />
					<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" /></form></li>
					<div style="clear: both;"></div>
   </ul>
  </div><!--/top-->
     <hr />

  </header>
  <div role="main">
    <content>
    








 
<ul id="carousel">
<?php $args = array('showposts'=>3, 'orderby'=>'rand'); 
  $customQuery = new WP_Query($args); ?>
<?php if ($customQuery-> have_posts() ) : while ($customQuery-> have_posts() ) :$customQuery-> the_post(); ?> 


<li> 

           <?php the_content(); ?>  
          
</li> 


<?php endwhile; endif;wp_reset_query(); ?>

       
</ul>



<div id="list">
<h3>List of Videos Avalable</h3>
<div class="list_vid">
            <h4>Video 1</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Titter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>
<div class="list_vid">
            <h4>Video 2</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Titter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>
<div class="list_vid">
            <h4>Video 3</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Twitter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>
<div class="list_vid">
            <h4>Video 4</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Twitter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>
<div class="list_vid">
            <h4>Video 5</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Titter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>
<div class="list_vid">
            <h4>Video 6</h4>
            <iframe width="150" height="70" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe>
			<input type="submit" id="twitter" type="submit" value="Titter"/>
			<input type="submit" id="facebook" type="submit" value="FaceBook"/>
			<input type="submit" id="linkedin" type="submit" value="LinkedIn"/>
			<input type="submit" id="email" type="submit" value="Email"/>
</div>

</div>



</content>
  </div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
 <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.infinitecarousel3.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.infinitecarousel3.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.easing.1.3.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<!--
  <!-- scripts concatenated and minified via build script -->
  <script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/script.js"></script>
  <!-- end scripts -->
-->
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
<script>
           
	$(document).ready( function(){
        $("#carousel").infiniteCarousel({
        imagePath: '',
		transitionSpeed:300,
		displayTime: 6000,
		internalThumbnails: false,
		thumbnailType: 'images',
		customClass: 'myCarousel',
		progressRingColorOpacity: '0,0,0,.9',
		progressRingBackgroundOn: false,
		easeLeft: 'easeOutExpo',
		easeRight:'easeOutQuart',
		inView: 1,
		advance: 1,
		autoPilot: false,
		prevNextInternal: true,
		autoHideCaptions: false
});
});   
	   
</script>	   
	   
	   
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>