<?php /* Template Name: seniorAddAdress Page */ ?>


<?php 


$headers = array(
    'Content-Type'  => 'application/json',
);

$body = array(
    'street' => $_POST["senior-street"],
    'streetNo'   => $_POST["senior-streetNo"],
    'zipNo' => $_POST["senior-zipNo"],
    'city' => $_POST["senior-city"],
    'country' => $$_POST["senior-country"],
    'state' => $_POST["senior-state"],
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

$_SESSION["street"] = $_POST["senior-street"];
$_SESSION["streetNo"] = $_POST["senior-streetNo"];
$_SESSION["zipNo"] = $_POST["senior-zipNo"];
$_SESSION["city"] = $_POST["senior-city"];
$_SESSION["country"] = $_POST["senior-country"];
$_SESSION["state"] = $_POST["senior-state"];

$addressId = $response_parts[4];
$seniorId = $_SESSION["seniorId"];

$arg = array(
    'headers'   => $headers, 
    'body'      => json_encode($body),
    'method'    => 'PUT',
    'sslverify' => false,
);

$request = wp_remote_post( 'http://localhost:8080/senior/addAddressById/' . $seniorId . "/" . $addressId , $arg );
$body    = wp_remote_retrieve_body($request); 

echo json_encode($body);

header("Location: https://localhost/wordpress/index.php/profile");

?> 