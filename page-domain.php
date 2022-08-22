<?php
get_header();

$args = array (
    'post_type'     => 'software',
    'post_status'   => 'publish'
);

$software = new WP_Query( $args );

if ( $software -> have_posts() ) {

    while ( $software -> have_posts() ) {
        $software -> the_post();

        the_title();

        the_content();

        echo '<hr>';
    }   
}
wp_reset_postdata();

get_footer();