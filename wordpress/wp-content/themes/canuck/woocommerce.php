<?php
/**
 * This file is the Woo Commerce template filr, used
 * for displaying Woo Commerce content.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2018  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuck_include_breadcrumbs, $canuck_exclude_page_title, $canuck_page_title;
$layout_option              = get_theme_mod( 'canuck_shop_page_layout', 'right_sidebar' );
$canuck_include_breadcrumbs = get_theme_mod( 'canuck_breadcrumbs' ) ? true : false;
$canuck_exclude_page_title  = false;
$canuck_page_title          = get_theme_mod( 'canuck_shop_page_title', __( 'Shop Products', 'canuck' ) );
get_header( 'no-feature' );
get_template_part( '/template-parts/partials', 'page-title-no-post' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'woo-a' ); ?>
			</aside>
			<div id="two-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'woo-a' ); ?>
			</aside>
			<div id="three-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'woo-b' ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $layout_option ) {
			?>
			<div id="fullwidth">
				<?php woocommerce_content(); ?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'woo-a' ); ?>
			</aside>
			<?php
		}// End if().
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();
