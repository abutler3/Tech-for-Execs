<!-- /*
Template Name: Video (Single)
*/ -->
<?php get_header();?>
  <div role="main">
 <div id="container">
  <div id="single_video">
    <h2><?php the_title();?></h2>
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