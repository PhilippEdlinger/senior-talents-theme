<?php /* Template Name: companyAddAddressRequest */ ?>

<?php 


$headers = array(
    'Content-Type'  => 'application/json',
);

$body = array(
    'street' => $_POST["company-street"],
    'streetNo'   => $_POST["company-streetNo"],
    'zipNo' => $_POST["company-zipNo"],
    'city' => $_POST["company-city"],
    'country' => $$_POST["company-country"],
    'state' => $_POST["compnay-state"],
); 

$arg = array(
    'headers'   => $headers, 
    'body'      => json_encode( $body ),
    'method'    => 'POST',
    'sslverify' => false,
);

$request = wp_remote_post( 'http://localhost:8080/address/create', $arg );
$response     = wp_remote_retrieve_header($request , 'location'); // get location of response header
$response_parts = explode( '/' , $response);

$_SESSION["street"] = $_POST["company-street"];
$_SESSION["streetNo"] = $_POST["company-streetNo"];
$_SESSION["zipNo"] = $_POST["company-zipNo"];
$_SESSION["city"] = $_POST["company-city"];
$_SESSION["country"] = $_POST["company-country"];
$_SESSION["state"] = $_POST["compnay-state"];


$addressId = $response_parts[4];
$companyId = $_SESSION["companyId"];

$arg = array(
    'headers'   => $headers, 
    'body'      => json_encode($body),
    'method'    => 'PUT',
    'sslverify' => false,
);

$request = wp_remote_post( 'http://localhost:8080/company/addAddressById/' . $companyId . "/" . $addressId , $arg );
$body    = wp_remote_retrieve_body($request); 

header("Location: https://localhost/wordpress/wordpress/index.php/company-profile");

?> 