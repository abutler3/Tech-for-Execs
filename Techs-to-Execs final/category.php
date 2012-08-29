<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Techs-to-execs
 * @since Twenty Ten 1.0
 */

 get_header(); ?>
 <div id="main"> 
 	<div id="container">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class="post">

 <!-- Display the Title as a link to the Post's permalink. -->
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php trim_title(); ?></a></h2>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

  <div class="entry">
    <?php the_content(); ?>
  </div>

 <iframe width="640" height="480" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>?rel=0" frameborder="0" allowfullscreen></iframe>
  <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
 <div style="clear: both;"></div>
 </div> <!-- closes the first div box -->      
 <?php get_sidebar(); ?>  
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>
 <div style="clear: both;"></div>
</div>

</div>
<?php get_footer(); ?>
