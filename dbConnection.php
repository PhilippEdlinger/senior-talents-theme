<?php /* Template Name: dbconnection */ ?>

<?php

$email = $_POST['login-form-input-email'];
$pwd = $_POST['login-form-input-password'];

$http_request = "http://localhost:8080/senior/getByEmailPassword?email=" . $email . "&password=". $pwd;

$response = wp_remote_get($http_request);
$body     = wp_remote_retrieve_body($response); 
 
if (substr_count( $body, "\n" ) == 0){
   $json_body = json_decode($body, true);
    $_SESSION["firstName"] = $json_body["firstName"];
    $_SESSION["lastName"] = $json_body["lastName"];
    $_SESSION["commute"] = $json_body["commute"];
    $_SESSION["descr"] = $json_body["descr"];
    $_SESSION["email"] = $json_body["email"];
    $_SESSION["hoursPerWeek"] = $json_body["hoursPerWeek"];
    $_SESSION["interestDescr"] = $json_body["interestDescr"];
    $_SESSION["jobBranche"] = $json_body["jobBranche"];
    $_SESSION["jobField"] = $json_body["jobField"];
    $_SESSION["password"] = $json_body["password"];
    $_SESSION["preferableWork"] = $json_body["preferableWork"];
    $_SESSION["seniorId"] = $json_body["seniorId"];
    $_SESSION["skillDescr"] = $json_body["skillDescr"];

   if(session_status() == PHP_SESSION_ACTIVE){
     header("Location: https://localhost/wordpress/wordpress/index.php/profile");
   }
   
 }else{
    header("Location: https://localhost/wordpress/wordpress/index.php/login");
 }
 
?>