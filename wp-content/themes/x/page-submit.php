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
					<p>Register for an account using the form on the left. This does not have to be your university email.</p>
					<p>Log in, and use the form to submit your work</p>
					<div class="idiot-proof">
						<p>Your name will be displayed next to your work, this can be your artist pseudonym instead</p>
						<p>Add the title of your work and type in a list of relevant tags, seperated by spaces.</p>
						<p>Select your course, and use the text area to add up to 250 words about your work</p>
						<div class="idiot-proof__images">
							<p>Click 'Choose File' to upload your first image. Upload a square .jpg file (1000x1000px). This could be a single photo of your work, or a montage of several images. This first image will appear here, and as the thumbnail when a grid of work is displayed.</p>
							<p>Optionally - click 'Add another image', to keep adding more supporting photos. These will appear below your main 'hero' image, on this side of the page.</p>
						</div>
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
		.left-inner {
			top: 22vh;
			margin-bottom: 280px;
		}
		.left {
			overflow:hidden;
		}
		.right {
			padding-bottom: 200px;
		}

		@media all and (min-width: 1400px) {
			.left-inner {
				margin-bottom: 200px;
			}
		}
	</style>

<?php
get_sidebar();
get_footer();
