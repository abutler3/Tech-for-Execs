<!-- /*
Template Name: Video (All+)
*/ -->


<?php get_header();?>
  <div role="main">
 <div id="container">
    <h3><?php the_title();?></h3>
        <?php query_posts('post_type=video');
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="archive-video">
        <p class="archive_video_title"><?php trim_title();?></p>
        <a href="<?php the_permalink();?>"><img class="archive_video_thumbnail"src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a>
    </div><!--/archive_video-->
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif;
        wp_reset_query(); ?>

<div style="clear: both;"></div>
  </div><!--/container-->
   <footer>
  </footer>
 </div><!--/main-->