<?php get_header();?>
  <div role="main">
 <div id="container">
 <?php while ( have_posts() ) : the_post(); ?>
<h3><?php the_title();?></h3>
<p><?php the_content();?></p>
<?php endwhile; // end of the loop. ?>
  <footer>
  </footer>
<div style="clear: both;"></div>
</div><!--/container-->
  </div>
  <?php get_footer();?>