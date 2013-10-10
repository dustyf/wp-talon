<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP Talon
 * @since WP Talon 1.0
 */
?>
	<?php tha_content_bottom(); ?>
	</div><!-- #main .site-main -->
	<?php tha_content_after(); ?>

	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="site-info">
			
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon .site-footer -->
	<?php tha_footer_after(); ?>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
<?php tha_body_bottom(); ?>
</body>
</html>