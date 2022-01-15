<?php /* Template Name: update company profile  */ ?>

<?php 
    $_SESSION["companyName"] = $_POST["companyName"];
    $_SESSION["websiteUrl"] = $_POST["websiteUrl"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["branche"] = $_POST["branche"];

    
    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = $_SESSION;    
    $body["descr"] = "";
    $body["commute"] = "";

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'PATCH',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/company/updateSingleOrMoreProperties/', $arg );
    $response     = wp_remote_retrieve_body($request); 
    
    //echo $_SESSION["jobField"] . '#######' . $_SESSION["jobBranche"];
    //echo json_encode($request);
    
    header("Location: https://localhost/wordpress/wordpress/index.php/company-profile");  
?>