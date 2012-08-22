<!-- /*
Template Name: Video (All)
*/ -->

<?php get_header();?>
  <div role="main">
 <div id="container">
  <div id="mainvideo">
    

        <?php query_posts('post_type=video');
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<p><a href="<?php the_permalink();?>"><img id="video_all_thumbnails" src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a></p>        <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
wp_reset_query(); ?>
    
<div style="clear: both;"></div>
</div><!--/mainvideo-->
  
  <footer>
  </footer>
<div style="clear: both;"></div>
</div><!--/container-->
  </div>
  <?php get_footer();?>