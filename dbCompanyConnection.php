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
  $_SESSION["companyId"] = $json_body["companyId"];
   
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
 header("Location: https://localhost/wordpress/wordpress/index.php/company-profile");
}

else{ 
 header("Location: https://localhost/wordpress/wordpress/index.php/signup_company");
 }
 
?>