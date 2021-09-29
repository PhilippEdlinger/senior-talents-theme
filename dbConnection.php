<?php
$response = wp_remote_get( 'http://localhost:8080/seniors' );
$body     = wp_remote_retrieve_body($response);

function createHtmlTableOfArray($array){

}

?>