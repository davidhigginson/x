<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <div class="grid-container">

          <div class="left-inner">
            <div class="center">
            <!-- <a href="<?php echo get_permalink() ?>/submit" class="button">Submit Work</a> -->
            </div>
            
            <div class="filters" id="work">
            <p>Search & Tags</p>
            <?php echo do_shortcode('[searchandfilter fields="search,post_tag" types=",select" headings=",Tags"]'); ?>
            </div>

            <?php 
          $getdate = getdate();
          $args = array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'date_query' => array(
                  array(
                      'year'  => $getdate["year"]
                  ),
                ),
            );

          $query = new WP_Query( $args );

          $tax = 'category';
          $terms = get_terms( $tax );
          $count = count( $terms );

          if ( $count > 0 ): ?>
              <div class="filter-outer">
              <?php
              foreach ( $terms as $term ) {
                  $term_link = get_term_link( $term, $tax );
                  echo '<a href="' . $term_link . '" class="tax-filter" title="' . $term->slug . '">' . $term->name . '</a> ';
              } ?>
              </div>
          <?php endif; ?>

            <p><?php the_field('home_blurb'); ?></p>

            <!-- <a href="<?php echo get_permalink() ?>/submit" class="button">Join the mailing list</a> -->
            <a href="https://www.instagram.com/makingourmark.degreeshow/" class="button">Follow our instagram</a>
            <a href="mailto:info@makingourmark.degree" class="button">Email us</a>

          </div>

        </div>
      </div>

      <div class="right right-scroll">

        <?php 
          $getdate = getdate();
          $args = array(
                'post_type' => 'post',
                'posts_per_page' => 999,
                'date_query' => array(
                  array(
                      'year'  => $getdate["year"]
                  ),
                ),
            );

          $query = new WP_Query( $args );

          $tax = 'category';
          $terms = get_terms( $tax );
          $count = count( $terms );

          if ( $count > 0 ): ?>
          <?php endif;
          if ( $query->have_posts() ): ?>
         
          <div class="tagged-posts">
            <div class="grid-container">
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>


              <div class="work-item grid-33 tablet-grid-33 mobile-grid-50">
                <a href="<?php the_permalink(); ?>">
                  <?php  if ( has_post_thumbnail() ) { $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ ); echo '<img width="100%" src="' . $image_src[0] . '">'; } ?>
                  <span><?php usp_author_link(); ?></span>
                </a>
              </div>

              <?php endwhile; ?>

          <?php else: ?>
              <div class="tagged-posts">
                  <h2>No posts found</h2>
              </div>
          <?php endif; ?>
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
