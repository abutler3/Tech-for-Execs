<?php get_header(); ?>

<div role="main">
 <div id="container">
<?php $posts=query_posts($query_string .

'&posts_per_page=20'); ?>


<?php if (have_posts()) : ?>
<div id="list">
<h1 class="results-title">Search Results</h1>
<div class="list_vid">
<?php while (have_posts()) : the_post(); ?>
<div class="metarelated">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p><em>Filed under: <?php the_category('. '); ?></em></p>
  <!--           <p><em><a href="#">Comments: 15</a></em></p> -->
            <div class="social-loop">

          <?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
          </div>

</div>
<!--       </div>
          </div> -->
            <div class="metaphoto">
              <iframe width="640" height="480" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'YOUR_PREFIX_video_url', true );?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
  <div class="clear" style="clear: both;"></div>

<?php endwhile; ?>


<?php endif; ?>


<?php next_posts_link('&laquo; Older Entries') ?>

<?php previous_posts_link('Newer Entries &raquo;') ?>
</div>
</div>
</div>


<?php get_footer(); ?>