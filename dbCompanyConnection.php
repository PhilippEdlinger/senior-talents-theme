<?php /* Template Name: company dbconnection */ ?>

<?php

$email = $_POST['login-company-form-input-email'];
$pwd = $_POST['login-company-form-input-password'];

$http_request = "http://localhost:8080/company/getByEmailPassword?email=" . $email . "&password=". $pwd;

$response = wp_remote_get($http_request);
$body     = wp_remote_retrieve_body($response); 
 
if (substr_count( $body, "\n" ) == 0){
   $json_body = json_decode($body, true);
    $_SESSION["email"] = $json_body["email"];
    $_SESSION["password"] = $json_body["password"];
    $_SESSION["companyName"] = $json_body["companyName"];
    $_SESSION["websiteUrl"] = $json_body["websiteUrl"];
    $_SESSION["email"] = $json_body["email"];
    $_SESSION["branche"] = $json_body["branche"];
    
   if(session_status() == PHP_SESSION_ACTIVE){
    header("Location: https://localhost/wordpress/wordpress/index.php/company-profile");
   }
   
 }else{ 
    header("Location: https://localhost/wordpress/wordpress/index.php/signup_company");
 }
 
?>