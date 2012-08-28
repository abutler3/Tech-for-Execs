<!-- /*
Template Name: Video (All+)
*/ -->


  <?php get_header();?>
  <div role="main">
   <div id="container">
   <div id="list">
<h2 class="list-header">List of Videos Avalable</h2>
  <div style="clear: both;"></div>

        <?php query_posts('post_type=video');
        if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<article class="archive-front"> 
  
<div class="front-thumbnail">
  <a href="<?php the_permalink();?>"><img id="video_all_thumbnails" src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a>
</div> <!-- End front-thumbnail -->
  <div class="archive-meta">
            <h3 id="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php trim_title(); ?></a></h3>
    <p id="category"><em>Filed under: <?php the_category('. '); ?></em></p>
  </div> <!-- End archive-meta --> 
</article>

<?php endwhile; else: ?><!--/video_title_thumbnails-->
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
wp_reset_query(); ?>
<div style="clear: both;"></div>

</div> <!-- End list -->
<div style="clear: both;"></div>
  </div><!--/container-->
   <footer>
  </footer>
 </div><!--/main-->