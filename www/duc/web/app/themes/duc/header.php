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
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img alt="DUC Logo" class="img-responsive logo" src="<?php echo get_template_directory_uri() ?>/image/DUC-logo.png">
				</a>

				<button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavAltMarkup" data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php /*
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<div class="navbar-nav">

						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">ABOUT</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/duc-at-a-glance">DUC at a Glance</a>
								<a class="dropdown-item" href="/history">History</a>
								<a class="dropdown-item" href="/guiding-pillars">Guiding Pillars</a>
								<a class="dropdown-item" href="/values">Values</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">INITIAL USE CASE</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/interruption-in-treatment-and-continuity-of-treatment">Interruption in Treatment and Continuity of Treatment</a>
								<a class="dropdown-item" href="/community-kick-off">Community Kick-Off</a>
							</div>
						</li>

						<li class="nav-item"><a class="nav-link" href="https://wiki.ohie.org/pages/viewpage.action?spaceKey=SUB&title=Data+Use+Community" target="_blank" rel="noopener">RESOURCES<!--span class="material-icons" style="font-size: 95%; position: absolute; display: inline-block; margin-bottom: 5px; margin-left: 3px">launch</span--></a></li>

						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">GET ENGAGED</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/join-the-duc">Join the DUC</a>
								<a class="dropdown-item" href="/engagement-process">Engagement Process</a>
							</div>
						</li>

					</div>
				</div> */
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