<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WP Talon
 * @since WP Talon 1.0
 */
?>
		<?php tha_sidebars_before(); ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php tha_sidebar_top(); ?>
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<?php // Add Default Sidebar Widgets Here; ?>
			<?php endif; // end sidebar widget area ?>
			<?php tha_sidebar_bottom(); ?>
		</div><!-- #secondary .widget-area -->
		<?php tha_sidebars_after(); ?>