<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://github.com/belive2be/usewp
 *
 * @package WordPress
 * @subpackage UseWP
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- JUMBOTRON -->
<div class="container">
	<div class="row">
		<div class="col">
			<div class="jumbotron ju bg-dark text-light">
				<h1>Page</h1>

				<hr class="jumbotron-hr bg-primary border border-warning">

				<div class="alert alert-success alert-dismissible show in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<strong class="text-danger">page.php</strong>
					<br>
					Шаблон страницы используется, когда посетители запрашивают отдельные страницы, которые являются встроенным шаблоном.
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
