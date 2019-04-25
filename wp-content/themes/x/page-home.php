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
      <div class="grid-container">

      <?php echo do_shortcode('[searchandfilter fields="search,post_tag" types=",radio" headings=",Tags"]'); ?>
        
      <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
        );

        $query = new WP_Query( $args );

        $tax = 'category';
        $terms = get_terms( $tax );
        $count = count( $terms );

        if ( $count > 0 ): ?>
            <div class="post-tags">
            <?php
            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term, $tax );
                echo '<a href="' . $term_link . '" class="tax-filter" title="' . $term->slug . '">' . $term->name . '</a> ';
            } ?>
            </div>
        <?php endif;
        if ( $query->have_posts() ): ?>
        <div class="tagged-posts">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>


            <div class="grid-25 tablet-grid-33 mobile-grid-50">
            <a href="<?php the_permalink(); ?>">
              <?php  if ( has_post_thumbnail() ) { $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ ); echo '<img width="100%" src="' . $image_src[0] . '">'; } ?>
              <span><?php the_title(); ?></span>
            </a>
            </div>

            <?php endwhile; ?>
        </div>

        <?php else: ?>
            <div class="tagged-posts">
                <h2>No posts found</h2>
            </div>
        <?php endif; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
