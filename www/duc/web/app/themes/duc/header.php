<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class="sticky-top sticky">
		<ul id="uninav">
			<li>DUC<img src="https://datausecommunity.org/assets/link.svg" alt="link icon"></li>
			<li><a href="https://datausecommunity.org" class="active">Website</a></li>
			<li><a href="https://forum.datausecommunity.org">Forum</a></li>
			<li><a href="https://wiki.ohie.org/pages/viewpage.action?spaceKey=SUB&amp;title=Data+Use+Community">Wiki</a></li>
			<li><a href="https://guides.ohie.org/duc/">Technology Intervention Framework</a></li>
		</ul>
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img alt="DUC Logo" class="img-responsive logo" src="<?php echo get_template_directory_uri() ?>/image/DUC-logo.png">
				</a>

				<button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavAltMarkup" data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu( array(
					'menu'			  => 'Nav',
					'theme_location'  => 'primary',
					'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse justify-content-end',
					'container_id'    => 'navbarNavAltMarkup',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				?>
            </div>
		</nav>
	</div>
	<a id="context"></a>