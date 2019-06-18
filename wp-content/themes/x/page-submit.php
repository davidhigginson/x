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

			<div class="left">
				<div class="left-inner">
					<?php if (function_exists('usp_login_form')) usp_login_form(); ?>
					<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
				</div>
			</div>

			<div class="right black">
				<div class="right-inner">
					<div class="idiot-proof">
						<p>To submit work, register or log in using the form. Once logged in, return to this page and the submission form will be visible</p>

						<h3>Hero image:</h3>
						<p>Your hero image will appear as the main image when you first visit your profile, and as your thumbnail across the rest of the site. Hero images MUST be square, at the highest quality you can produce, and a minimum of 1000x1000 pixels (images may not exceed 1500 pixels in width).</p>
							
						<h3>Supporting media:</h3>
						<p>Supporting media will show on your profile below the hero image, and is not mandatory to add. You can upload up to 5 images of any shape, and submit a link to a Youtube/Vimeo video of your work that will be embedded in your profile.</p>

						<p>If you have any questions, please email <a href="mailto:info@makingourmark.degree">info@makingourmark.degree</a>

					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<style>
		.site-description {
			top: 2vh;
			color:black;
		}
		.left {
			overflow:hidden;
		}
		.right {
			padding-bottom: 200px;
		}
		.left-inner {
			top: 22vh;
			margin-bottom: 280px;
		}
		@media all and (min-width: 1400px) {
			.left-inner {
				margin-bottom: 250px;
			}
		}
	</style>

<?php
get_sidebar();
get_footer();
