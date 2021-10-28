<?php /* Template Name: dbconnection */ ?>

<?php

$email = $_POST['login-form-input-email'];
$pwd = $_POST['login-form-input-password'];

$http_request = "http://localhost:8080/senior/getByEmailPassword?email=" . $email . "&password=". $pwd;

$response = wp_remote_get($http_request);
$body     = wp_remote_retrieve_body($response); 
 if (substr_count( $body, "\n" ) == 0){
    header("Location: https://localhost/wordpress/wordpress/index.php/profile");
 }else{
    header("Location: https://localhost/wordpress/wordpress/index.php/login");
 }
 

?>