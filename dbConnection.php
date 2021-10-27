<?php /* Template Name: dbconnection */ ?>

<?php
/*
$response = wp_remote_get( 'http://localhost:8080/seniors' );
$body     = wp_remote_retrieve_body($response);
    return json_decode($body)

*/
echo "die Werte hoid: <br>" ;

$email = $_POST['login-form-input-email'];
$pwd = $_POST['login-form-input-password'];

$http_request = "http://localhost:8080/senior/getByEmailPassword?email=" . $email . "&password=". $pwd;

$response = wp_remote_get($http_request);
$body     = wp_remote_retrieve_body($response);
echo $body;

?>