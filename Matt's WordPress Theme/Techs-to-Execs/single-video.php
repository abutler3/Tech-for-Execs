<!-- /*
Template Name: Video (Single)
*/ -->
<?php get_header();?>
  <div role="main">
 <div id="container">
  <div id="mainvideo">
    <h2><?php the_title();?></h2>
        <?php 
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
          <p><iframe src="http://youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>"></p>
        <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
wp_reset_query(); ?>
    
<div style="clear: both;"></div>
</div><!--/mainvideo-->
    <?php get_sidebar();?>
  <footer>
  </footer>
<div style="clear: both;"></div>
</div><!--/container-->
  </div>
  <?php get_footer();?>