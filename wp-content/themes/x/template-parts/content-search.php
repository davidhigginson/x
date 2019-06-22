<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crossroad
 */

?>

<div class="work-item grid-33 tablet-grid-33 mobile-grid-50">
	<a href="<?php the_permalink(); ?>">
		<?php  if ( has_post_thumbnail() ) { $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ ); echo '<img width="100%" src="' . $image_src[0] . '">'; } ?>
		<span><?php usp_author_link(); ?></span>
	</a>
</div>
