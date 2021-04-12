<?php get_header(); ?>

<div class="container">
	<div class="content">
		<!--Added a before content action hook-->
		<?php do_action( 'wpmu_before_content' ); ?>
	<?php if ( have_posts()) :?>
		<?php while (have_posts()) : the_post();?>

			<?php get_template_part ( 'loop' ); ?>

		<?php endwhile; endif; ?>

		<!--Added a after content action hook-->
		<?php do_action( 'wpmu_after_content' ); ?>
	</div><!--.content-->

<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>
