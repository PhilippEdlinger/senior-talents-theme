<?php
$response = wp_remote_get( 'http://localhost:8080/seniors' );
$body     = wp_remote_retrieve_body($response);
    return json_decode($body)
?>