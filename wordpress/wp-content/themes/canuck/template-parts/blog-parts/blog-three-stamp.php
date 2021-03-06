<?php
/**
 * Template Part, blog three column stamp.
 *
 * Used in home.php.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2018  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$post_count = 0;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if ( 0 === $post_count || is_int( $post_count / 3 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-three-stamp-left three-stamp-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'stamp' ); ?>
			</article>
			<?php
		} elseif ( 1 === $post_count || is_int( ( $post_count - 1 ) / 3 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-three-stamp-center three-stamp-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'stamp' ); ?>
			</article>	
			<?php
		} elseif ( 2 === $post_count || is_int( ( $post_count + 1 ) / 3 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-three-stamp-right three-stamp-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'stamp' ); ?>
			</article>
			<div class="clearfix"></div>
			<?php
		}
		$post_count++;
	}
	get_template_part( '/template-parts/partials', 'page-navi' );
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
