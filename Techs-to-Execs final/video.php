<!-- /*
Template Name: Video (All)
*/ -->

<?php get_header();?>
  <div role="main">
 <div id="container">
  
    <h3><?php the_title();?></h3>
    <div id="mainvideo">
        <?php query_posts('post_type=video');
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<p id="video_titles"><?php the_title();?></p><a href="<?php the_permalink();?>"><img id="video_all_thumbnails" src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a><?php endwhile; else: ?>
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