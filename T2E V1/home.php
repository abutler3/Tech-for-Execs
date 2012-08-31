<!-- /*
Template Name: Home
*/ -->
<?php get_header();?>
  <div role="main">
 <div id="container">
  <ul id="carousel">

  <?php $args = array('post_type'=>'video', 'showposts'=>3, 'orderby'=>'rand'); 
  $customQuery = new WP_Query($args); ?>
     
<?php if ($customQuery-> have_posts() ) : while ($customQuery-> have_posts() ) :$customQuery-> the_post(); ?>        
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
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php trim_title();?></a></h3>
<!--     <p><em>Filed under: <?php the_category('. '); ?></em></p>
 -->  </div> <!-- End archive-meta -->  
<div class="front-thumbnail">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img id="video_all_thumbnails" src="http://img.youtube.com/vi/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>/0.jpg"></a>
</div> <!-- End front-thumbnail -->
  <div class="fsocial">

              <?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>

    
  </div> <!-- End fsocial -->
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