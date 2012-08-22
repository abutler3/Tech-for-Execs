<?php get_header();?>
  <div role="main">
 <div id="container">
  <ul id="carousel">
<!--<li><div id="vid0"><iframe width="560" height="315" src="http://www.youtube.com/embed/UfjEydlUdT8" frameborder="0" allowfullscreen></iframe></div></li>-->
<!--<li><iframe longdesc="http://img.youtube.com/vi/QQh56geU0X8/2.jpg" width="640" height="360" src="http://www.youtube.com/embed/QQh56geU0X8?rel=0&amp;hd=1" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>-->
<li><iframe longdesc="http://img.youtube.com/vi/UfjEydlUdT8/2.jpg" width="640" height="360" src="http://www.youtube.com/embed/UfjEydlUdT8" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>
<li><iframe longdesc="http://img.youtube.com/vi/KXdUNp_9oHs/2.jpg" width="640" height="360" src="http://www.youtube.com/embed/KXdUNp_9oHs" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>
<li><iframe longdesc="http://img.youtube.com/vi/kkGeOWYOFoA/2.jpg" width="640" height="360" src="http://www.youtube.com/embed/kkGeOWYOFoA" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>
<li><iframe longdesc="http://img.youtube.com/vi/hjnc1kHMDDo/2.jpg" width="640" height="360" src="http://www.youtube.com/embed/hjnc1kHMDDo" wmode="transparent" frameborder="0" allowfullscreen></iframe></li>
</ul>



<div id="list">
<h3>List of Videos Avalable</h3>
<div class="list_vid">
  <?php query_posts( 'post_type=videos' ) ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="metarelated">
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
            <p><em>Filed under: <?php the_category('. '); ?></em></p>
            <p><em><a href="#">Comments: 15</a></em></p>
            <div class="social-loop">

          <div class="twitterbutton"><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><div> <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-counturl="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-via="username" data-related="username">Tweet</a></div></div>

          <div class="likebutton"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&layout=button_count&show_faces=false&width=100&action=like&font=verdana
&colorscheme=light&height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>

          <div class="linkedinshare"><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="right"></script></div>

          <div class="plusonebutton"><g:plusone size="medium"></g:plusone></div>

          <div class="email"><a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink() ?>" title="Send this
 article to a friend!"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social-email.png" alt="Email this Article to a friend" /></a></div>

</div>
      </div>
          </div>
            <div class="metaphoto">
              <?php the_content(); ?>
            </div>
  <div class="clear" style="clear: both;"></div>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>
</div>


</div>



</div>
  </div>
   <?php get_footer();?>