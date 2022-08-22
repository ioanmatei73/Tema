<?php
get_header();

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        the_post_thumbnail();

		echo '<h1><a href="' . get_permalink() . '">' . get_the_title() . '</a></h1><br>';
    }   
}

get_footer();