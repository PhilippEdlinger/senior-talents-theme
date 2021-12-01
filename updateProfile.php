<?php /* Template Name: updateprofile Page */ ?>

<?php 
    $_SESSION["firstName"] = $_POST["firstName"];
    $_SESSION["lastName"] = $_POST["lastName"];
    $_SESSION["commute"] = $_POST["commute"];
    $_SESSION["descr"] = $_POST["descr"];
    $_SESSION["hoursPerWeek"] = $_POST["hoursPerWeek"];
    $_SESSION["interestDescr"] = $_POST["interestDescr"];
    $_SESSION["jobBranche"] = $_POST["jobBranche"];
    $_SESSION["jobField"] = $_POST["jobField"];
    $_SESSION["preferableWork"] = $_POST["preferableWork"];
    $_SESSION["skillDescr"] = $_POST["skillDescr"];
    
    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = $_SESSION;    

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'PUT',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/senior/updateSingleOrMoreProperties', $arg );
    $response     = wp_remote_retrieve_body($request); 
    
    echo json_encode($body);

    //echo json_encode($response);

    //header("Location: https://localhost/wordpress/wordpress/index.php/profile");
    
?>