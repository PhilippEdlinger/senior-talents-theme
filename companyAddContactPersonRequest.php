<?php /* Template Name: CompanyAddContactPersonRequest */ ?>

<?php 


$headers = array(
    'Content-Type'  => 'application/json',
);

$body = array(
    'title' => $_POST["company-contactperson-title"],
    'firstName'   => $_POST["company-contactperson-firstName"],
    'lastName' => $_POST["company-contactperson-lastName"],
    'email' => $_POST["company-contactperson-email"],
    'telNo' => $_POST["company-contactperson-telNo"],
); 

$arg = array(
    'headers'   => $headers, 
    'body'      => json_encode( $body ),
    'method'    => 'POST',
    'sslverify' => false,
);

$request = wp_remote_post( 'http://localhost:8080/contact-person/create', $arg );
$response     = wp_remote_retrieve_header($request , 'location'); // get location of response header
$response_parts = explode( '/' , $response);



$_SESSION["contactperson-title"] = $_POST["company-contactperson-title"];
$_SESSION["contactperson-firstName"] = $_POST["company-contactperson-firstName"];
$_SESSION["contactperson-lastName"] = $_POST["company-contactperson-lastName"];
$_SESSION["contactperson-email"] = $_POST["company-contactperson-email"];
$_SESSION["contactperson-telNo"] = $_POST["company-contactperson-telNo"];


$contactPersonId = $response_parts[4];
$companyId = $_SESSION["companyId"];

$arg = array(
    'headers'   => $headers, 
    'body'      => json_encode($body),
    'method'    => 'PUT',
    'sslverify' => false,
);

$request = wp_remote_post( 'http://localhost:8080/company/addContactPersonById/' . $companyId . "/" . $contactPersonId , $arg );
$body    = wp_remote_retrieve_body($request); 

header("Location: https://localhost/wordpress/index.php/company-profile");

?> 