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
				<a class="navbar-brand" href="index.html">
					<img alt="DUC Logo" class="img-responsive logo" src="<?php echo get_template_directory_uri() ?>/image/DUC-logo.png">
				</a>

				<button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavAltMarkup" data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<div class="navbar-nav">

						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button">ABOUT</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="duc-at-a-glance.html">DUC at a Glance</a>
								<a class="dropdown-item" href="history.html">History</a>
								<a class="dropdown-item" href="guiding-pillars.html">Guiding Pillars</a>
								<a class="dropdown-item" href="values.html">Values</a>

							</div>
						</li>

						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">INITIAL USE CASE</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="Interruption-Continuity-of-Treatment.html">Interruption in Treatment and Continuity of Treatment</a>
								<a class="dropdown-item" href="community-kick-off.html">Community Kick-Off</a>
							</div>
						</li>


						<a class="nav-item nav-link" href="https://wiki.ohie.org/pages/viewpage.action?spaceKey=SUB&title=Data+Use+Community">RESOURCES</a>


						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">GET ENGAGED</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="join-the-duc.html">Join the DUC</a>
								<a class="dropdown-item" href="engagement-process.html">Engagement Process</a>
							</div>
						</li>

					</div>
				</div>
            </div>
		</nav>
	</div>
	<a id="context"></a>