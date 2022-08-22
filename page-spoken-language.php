<?php
get_header();

$spoken_language = 'english';

$args = array (
    'post_type'     => 'engineer',
    'post_status'   => 'publish',
    'orderby'       => 'title',
    'order'         => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'spoklang',
            'field'    => 'slug',
            'terms'    => $spoken_language
        )
    )
);

$engineers = new WP_Query( $args );

if ( $engineers -> have_posts() ) {

    echo 'Engineers who speak ' . $spoken_language . ":<br>";
    
    while ( $engineers -> have_posts() ) {
        $engineers -> the_post();

        the_title();

        echo '<br>';
    }   
}
wp_reset_postdata();

get_footer();