<?php get_header(); ?>
		<div role="main">
 <div id="container">
<?php if (have_posts()) : ?>
<h1 class="results-title">Search Results</h1>
<?php while (have_posts()) : the_post(); ?>
	<?php the_title(); ?>
<?php endwhile; endif; ?>



<?php next_posts_link('&laquo; Older Entries') ?>

<?php previous_posts_link('Newer Entries &raquo;') ?>
</div>
</div>

<?php get_footer(); ?>