<!-- /*
Template Name: Home
*/ -->
<?php get_header();?>
  <div role="main">
 <div id="container">
  <ul id="carousel">
    <?php query_posts( 'post_type=video&posts_per_page=4' ) ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>         
   <li><iframe longdesc="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/2.jpg" width="640" height="480" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>?rel=0&amp;hd=1" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>
 <?php endwhile; endif; ?>
</ul>



<div id="list">
<h2 class="list-header">List of Videos Avalable</h2>
  <div style="clear: both;"></div>

        <?php query_posts('post_type=video');
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<article class="archive-front">
  <div class="archive-meta">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <p><em>Filed under: <?php the_category('. '); ?></em></p>
  </div> <!-- End archive-meta -->  
  <div class="fsocial">

          <div class="ftwitterbutton"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><div> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-via="username" data-related="username">Tweet</a></div></div>

          <div class="flikebutton"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&layout=button_count&show_faces=false&width=100&action=like&font=verdana
&colorscheme=light&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>

          <div class="flinkedinshare"><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="right"></script></div>

          <div class="fplusonebutton"><g:plusone size="medium"></g:plusone></div>

          <div class="femail"><a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink() ?>" title="Send this
 article to a friend!"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-email.png" alt="Email this Article to a friend" /></a></div>
    </div> <!-- End fsocial -->
<div class="front-thumbnail">
  <img id="video_all_thumbnails" src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a>
</div> <!-- End front-thumbnail -->
</article>

<?php endwhile; else: ?><!--/video_title_thumbnails-->
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
wp_reset_query(); ?>
<div style="clear: both;"></div>

</div> <!-- End list -->
</div> <!-- End container -->
  </div> <!-- End role -->

   <?php get_footer();?>