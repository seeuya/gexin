<?php
/*
Template Name: GeXin
*/

get_header(); ?>

<div id="gexin">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php thinkup_input_allowcomments(); ?>

			<?php endwhile; ?>
</div>

<?php get_footer(); ?>