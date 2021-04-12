<?php get_header(); ?>

<div class="container">
	<div class="content">
	<?php if ( have_posts()) :?>
		<?php while (have_posts()) : the_post();?>

			<?php get_template_part ( 'loop' ); ?>

		<?php endwhile; ?>
  <?php else: ?>
    <p>Sorry we messed up :(. There are no posts</p>

    <p>Please use the search box below to check what we have available.</p>
    <?php get_template_part('search') ?>
  <?php endif ?>

	</div><!--.content-->

<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>
