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
  $_SESSION["companyId"] = $json_body["id"];

  $_SESSION["street"] = null;
  $_SESSION["streetNo"] = null;
  $_SESSION["zipNo"] = null;
  $_SESSION["city"] = null;
  $_SESSION["country"] = null;
  $_SESSION["state"] = null;
  $_SESSION["addressId"] = null;
   
  $_SESSION["contactperson-title"] = null;
  $_SESSION["contactperson-firstName"] = null;
  $_SESSION["contactperson-lastName"] = null;
  $_SESSION["contactperson-email"] = null;
  $_SESSION["contactperson-telNo"] = null;

  $_SESSION["contactperson-title"] = null;
  $_SESSION["contactperson-firstName"] = null;
  $_SESSION["contactperson-lastName"] = null;
  $_SESSION["contactperson-email"] = null;
  $_SESSION["contactperson-telNo"] = null;

  $addressId = $json_body["address"]["addressId"];
  $contactPersonId = $json_body["contactPerson"]["id"];

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

  if ( $contactPersonId != null){

    $response = wp_remote_get("http://localhost:8080/contact-person/getById/" . $contactPersonId);
    $body     = wp_remote_retrieve_body($response); 

    echo json_encode($response);

    if (substr_count( $body, "\n" ) == 0){
      $json_body = json_decode($body, true);
      $_SESSION["contactperson-title"] = $json_body["title"];
      $_SESSION["contactperson-firstName"] = $json_body["firstName"];
      $_SESSION["contactperson-lastName"] = $json_body["lastName"];
      $_SESSION["contactperson-email"] = $json_body["email"];
      $_SESSION["contactperson-telNo"] = $json_body["telNo"];
    }
      
  }

  header("Location: https://localhost/wordpress/wordpress/index.php/company-profile");
}

else{ 
  header("Location: https://localhost/wordpress/wordpress/index.php/signup_company");
}
 
?>