<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crossroad
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="grid-container">
				<div class="grid-50 mobile-grid-100">
					<?php if (function_exists('usp_login_form')) usp_login_form(); ?>
				</div>
				<div class="grid-50 mobile-grid-100">
					<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
