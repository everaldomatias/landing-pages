<?php

/**
 * Check the brownser
 * 
 * @since    1.0.0
 */
function lp_what_the_browser( $browser ) {
    if ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $agent = $_SERVER['HTTP_USER_AGENT'];
    }

    if ( strlen( strstr( $agent, $browser ) ) > 0 ) {
        return true;
    }
}