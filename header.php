<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tugas_udemy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link href="<?php bloginfo ('stylesheet_directory')?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo ('stylesheet_directory')?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo ('stylesheet_directory')?>/assets/css/custom.css" rel="stylesheet">
	<!--<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>-->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="page" class="site">
	<header class="site-header" role="banner">

		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="/"><img src="<?php bloginfo ('stylesheet_directory')?>/assets/img/logo.png"></a>
					</div>
				</div>
			</div>
		
		</div>
	</header>
<div id="content" class="site-content">