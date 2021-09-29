<?php

	
$response = wp_remote_get( 'http://localhost:8080/seniors' );
$body     = wp_remote_retrieve_body($response);
$test=json_decode($body,TRUE);
//$body = split("[", $body);
//$request = WP_REST_Request::from_url( 'http://localhost:8080/hello' );
$db = mysqli_connect("localhost","root","","DB"); 
//$db = pg_connect("host=localhost port=5432 dbname=db user=app password=app");

/*
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
*/
if ($db) {

    echo 'Connection attempt succeeded.';
    
    } else {
    
    echo 'Connection attempt failed.';
    
    }
    

?>