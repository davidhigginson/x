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

      <div class="hero">
        <?php 
        $image = get_field('hero_graphic');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <a href="#work"><h2>View the work</h2>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 36 45" style="enable-background:new 0 0 36 36;" xml:space="preserve">
          <path d="M18.5,27.75V9.45l7.15,7.15c0.2,0.2,0.51,0.2,0.71,0c0.1-0.1,0.15-0.23,0.15-0.35s-0.05-0.26-0.15-0.35l-8-8  c-0.05-0.05-0.1-0.08-0.16-0.1c0,0,0,0,0,0c0,0,0,0,0,0c-0.08-0.03-0.17-0.04-0.26-0.03c-0.02,0-0.04,0.01-0.06,0.01  c-0.08,0.02-0.16,0.06-0.23,0.12l-8,8c-0.2,0.2-0.2,0.51,0,0.71s0.51,0.2,0.71,0l7.15-7.15v18.3c0,0.28,0.22,0.5,0.5,0.5  S18.5,28.02,18.5,27.75z"/>
        </svg>
        </a>
      </div>

      <?php 
        $getdate = getdate();
        $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
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
        <?php endif;
        if ( $query->have_posts() ): ?>
        <div class="filters" id="work">
          <p>Search & Tags</p>
          <?php echo do_shortcode('[searchandfilter fields="search,post_tag" types=",select" headings=",Tags"]'); ?>
        </div>
        <div class="tagged-posts">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>


            <div class="work-item grid-25 tablet-grid-33 mobile-grid-50">
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
