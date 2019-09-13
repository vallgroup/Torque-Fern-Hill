<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fernhill_theme
 */
$footer = get_field("footer", "option");

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container-1218px">
			<div class="row justify-content-between">
				<div class="col-12 col-lg-auto">
					<?php echo do_shortcode($footer["first_column"]); ?>
				</div>
				<div class="col-auto col-right">
					<?php echo do_shortcode($footer["second_column"]); ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
