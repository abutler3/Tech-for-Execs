<!-- /*
Template Name: Video (Single)
*/ -->
<?php get_header();?>
  <div role="main">
 <div id="container">
  <div id="single_video">
    <h2><?php the_title();?></h2>
    <div class="social-loop">

          <div class="twitterbutton"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><div> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-via="username" data-related="username">Tweet</a></div></div>

          <div class="likebutton"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&layout=button_count&show_faces=false&width=100&action=like&font=verdana
&colorscheme=light&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>

          <div class="linkedinshare"><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="right"></script></div>

          <div class="plusonebutton"><g:plusone size="medium"></g:plusone></div>

          <div class="email"><a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink() ?>" title="Send this
 article to a friend!"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-email.png" alt="Email this Article to a friend" /></a></div>

</div>
        <?php 
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
          <iframe width="640" height="480" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>?rel=0" frameborder="0" allowfullscreen></iframe>
        <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
wp_reset_query(); ?>
<?php the_excerpt();?>
    
<div style="clear: both;"></div>
</div><!--/single_video-->
<?php get_sidebar();?>
<img src="<?php bloginfo('template_directory'); ?>/images/disqus_screen_shot.png" alt="" />
  <footer>
  </footer>
<div style="clear: both;"></div>
</div><!--/container-->
  </div>
  <?php get_footer();?>