<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duc
 */

?>

		<footer>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-lg-3">
						<h3>Founding Organizations</h3>
					</div>
					<div class="col-4 col-lg-2">
						<a href="https://pepfar.gov" target="_blank" rel="noopener noreferrer"><img alt="PEPFAR logo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/logo.png"></a>
					</div>
					<div class="col-4 col-lg-2">
						<a href="https://ohie.org" target="_blank" rel="noopener noreferrer"><img alt="OPEN HIE logo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/openhie.png">
					</div>
				</div>
			</div>
		</footer>
<?php //echo get_page_template(); ?>
<?php wp_footer(); ?>

</body>
</html>
