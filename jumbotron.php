<?php
/**
 * A static jumbotron home page template.
 *
 * Template Name: Jumbotron
 * @package _gorilla
 */

get_header(); ?>
<div class="main-content-inner col-12">
	<?php while ( have_posts() ) : the_post(); ?>

	<div class="jumbotron">
		<h1 class="page-title"><?php the_title(); ?></h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#">Sign up today</a></p>
	</div>

    <div class="row marketing">
		<div class="col-lg-12">
			<?php get_template_part( 'content', 'page-noheading' ); ?>
        </div>
    </div>

	<?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
