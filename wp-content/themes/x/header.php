<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crossroad
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/unsemantic-grid-responsive-tablet.css" />
	<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
			<div class="header-outer">
				<div class="site-branding">
					<?php
					the_custom_logo();
					$crossroad_description = get_bloginfo( 'description', 'display' );
					if ( $crossroad_description || is_customize_preview() ) :
						?>
						<a class="header-link" href="<?php echo get_home_url() ?>"><h1 class="display site-description"><?php bloginfo( 'description' ); ?></h1></a>
					<?php endif; ?>
				</div>
			</div>


		</header>
	</div>
	
	<div id="content" class="site-content">
