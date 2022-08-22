<?php
get_header();

$args = array (
    'post_type'     => 'engineer',
    'post_status'   => 'publish'
);

$engineers = new WP_Query( $args );

if ( $engineers -> have_posts() ) {

    while ( $engineers -> have_posts() ) {
        $engineers -> the_post();

        the_title();

        the_content();

        echo '<hr>';
    }   
}
wp_reset_postdata();

get_footer();