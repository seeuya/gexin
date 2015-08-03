<?php
/**
 * Template Name: News
 *
 * @package ThinkUpThemes
 */

get_header(); ?>
			<div id="gxnews">
				<ul>
					<?php 	$recent_posts = wp_get_recent_posts();
							foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="' . __( 'Look', 'lan-thinkupthemes' ) . ' ' . esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> '; } ?>
				</ul>
			</div>

<?php get_footer(); ?>  