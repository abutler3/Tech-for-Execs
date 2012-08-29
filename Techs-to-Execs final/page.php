<?php get_header();?>
  <div role="main">
 <div id="container">
 <div id="page_style">
 <?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<p><?php the_content();?></p>
<?php endwhile; // end of the loop. ?>
</div><!--/page_style-->
  <footer>
  </footer>
<div style="clear: both;"></div>
</div><!--/container-->
  </div>
  <?php get_footer();?>