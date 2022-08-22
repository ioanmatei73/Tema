<?php
get_header();

if ( have_posts() ) {
    
    while ( have_posts() ) {
        
        the_post();
       
		echo '<h1>' . get_the_title() . '</h1>';
		
        the_content();

		echo '<h6>License validity: ' . get_field( 'license_validity' ) . ' days.</h6>';

        echo '<h6>Price: ' . get_field( 'price' ) . ' EUR</h6>';
    }

    $args = array (
        'post_type'     => 'engineer',
        'post_status'   => 'publish',
        'meta_key'      => 'date_of_birth',
        'meta_value'    => date( 'Ymd', strtotime( '-25 years' ) ),
        'meta_compare'  => '<=',
        'meta_query'    => array(
            array(
                'key'       => 'software',
                'value'     => '"' . get_the_ID() . '"',
                'compare'   => 'LIKE'
            )
        )
    );
    
    $engineers = new WP_Query( $args );
    echo '<hr>Authors (minimum 25 years old):<br>';

    if ( $engineers -> have_posts() ) {
       
        while ( $engineers -> have_posts() ) {
            $engineers -> the_post();
    
            echo get_the_title() . '<br>';
        }   
    } else {

        echo 'No authors ...';
        
    }
    wp_reset_postdata();
}

get_footer();