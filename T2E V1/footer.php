<?php wp_footer(); ?>
<footer>
        <p><img src="<?php bloginfo('template_directory'); ?>/images/logo-red-dropshadow.jpg" alt="" width="300px" height="30px"/><div id="text1"> © 2012 Tech For The Rest.</div><div id="text2"> The best technical videos for Executives. All Rights Reserved.</div></p>
    <p><a href="#"><strong>Email us</strong></a></p>
</footer>


<!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
 <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.infinitecarousel3.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.infinitecarousel3.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/easing.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<!--
  <!-- scripts concatenated and minified via build script -->
  <script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
<script>
           
  $(document).ready( function(){
        $("#carousel").infiniteCarousel({
        imagePath: '<?php bloginfo("template_url"); ?>/images/',
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