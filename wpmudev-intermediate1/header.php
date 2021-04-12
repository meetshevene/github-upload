<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>
</head>
<!--Added a body class here using body_class()-->
<body <?php body_class(); ?>>

	<!--Added an action hook before the header tag-->
	<?php do_action( 'wpmu_before_header' ); ?>

<header>
	<div class="header-left">
	<?php echo apply_filters( 'wpmu_header_content', '
		<div class="site-title">
			<h1 class="site-name"><a href=' . get_bloginfo('url') . 'title=' . get_bloginfo('name') . '>' . get_bloginfo('name') . '</a></h1>
			<h2 class="site-description">' . get_bloginfo( 'description' ) . '</h2>
		</div><!--.site-title-->' ); ?>
</div><!--.header-left-->

	<div class="header-right">
		<?php do_action( 'wpmu_in_header' ); ?>

		<?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'header-widget-area' ); ?>
		<?php endif; ?>
	</div><!--header-right-->

	<!--Added an action hook before the header tag-->
	<?php do_action( 'wpmu_after_header' ); ?>
</header>

<nav class="main">
	<?php wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'container_class' => 'menu'
	) ); ?>
</nav>
