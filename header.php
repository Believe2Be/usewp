<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://github.com/belive2be/usewp
 *
 * @package WordPress
 * @subpackage UseWP
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Front Page</title>

	<!-- Bootstrap CSS -->
	<link
		rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
		integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
		crossorigin="anonymous">

	<?php wp_head() ?>
</head>
<body class="bg-dark">

	<!-- Navigation -->
	<div class="container">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark border border-light border-left-0 border-right-0 border-top-0">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavbar" aria-controls="topNavbar" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse show" id="topNavbar" style="">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</div><!-- .Navigation container -->
