<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package crossroad
 */

get_header();
?>

	<section id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="left">
        <div class="grid-container">

          <div class="left-inner">
            <div class="center">
            <!-- <a href="<?php echo get_permalink() ?>/submit" class="button">Submit Work</a> -->
            </div>

            <div class="filters" id="work">
							<p>Search & Tags</p>
							<?php echo do_shortcode('[searchandfilter fields="search,post_tag" types=",select" headings=",Tags"]'); ?>
            </div>
          </div>

        </div>
      </div>

			<div class="right right-scroll">
				<div class="grid-container">

					<?php if ( have_posts() ) : ?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
