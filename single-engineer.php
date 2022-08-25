<?php
get_header();

if ( have_posts() ) {
    
    while ( have_posts() ) {
        
        the_post();

		echo '<h1>' . get_the_title() . '</h1>';
		
        the_content();
        
        $date_of_birth = date_create( get_field( 'date_of_birth' ) );
        $today = date_create( date( 'Ymd' ) );
        $interval = date_diff( $today, $date_of_birth );
        echo '<h4>Age: ' . $interval -> y . ' years old</h4><br>';
        
        $software = get_field( 'software' );
        foreach( $software as $soft ) {
            echo '<h5>' . get_the_title($soft) . '</h5>';
        }
    }
}

get_footer();