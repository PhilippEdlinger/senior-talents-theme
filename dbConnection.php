<?php /* Template Name: dbconnection */ ?>

<?php

$_SESSION["street"] = null;
$_SESSION["streetNo"] = null;
$_SESSION["zipNo"] = null;
$_SESSION["city"] = null;
$_SESSION["country"] = null;
$_SESSION["state"] = null;
$_SESSION["addressId"] = null;

$_SESSION["firstName"] = null;
$_SESSION["lastName"] = null;
$_SESSION["commute"] = null;
$_SESSION["descr"] = null;
$_SESSION["email"] = null;
$_SESSION["hoursPerWeek"] = null;
$_SESSION["interestDescr"] = null;
$_SESSION["jobBranche"] = null;
$_SESSION["jobField"] = null;
$_SESSION["password"] = null;
$_SESSION["preferableWork"] = null;
$_SESSION["seniorId"] = null;
$_SESSION["skillDescr"] = null;
$_SESSION["imageData"] = null;

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
    $_SESSION["imageData"] = $json_body["imageData"];
    
    $addressId = $json_body["address"]["addressId"];

    if ( $addressId != null){
      $response = wp_remote_get("http://localhost:8080/address/" . $addressId);
      $body     = wp_remote_retrieve_body($response); 
  
      if (substr_count( $body, "\n" ) == 0){
        $json_body = json_decode($body, true);
        $_SESSION["street"] = $json_body["street"];
        $_SESSION["streetNo"] = $json_body["streetNo"];
        $_SESSION["zipNo"] = $json_body["zipNo"];
        $_SESSION["city"] = $json_body["city"];
        $_SESSION["country"] = $json_body["country"];
        $_SESSION["state"] = $json_body["state"];
        $_SESSION["addressId"] = $json_body["addressId"];
      }  
    }

   if(session_status() == PHP_SESSION_ACTIVE){
     header("Location: https://localhost/wordpress/wordpress/index.php/profile");
   }
   
 }else{
    header("Location: https://localhost/wordpress/wordpress/index.php/login");
 }
 
?>