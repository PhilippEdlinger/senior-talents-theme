<?php /* Template Name: deleteSeniorRequest */ ?>
<?php 
    $arg = array(
        'headers'   => $headers, 
        'body'      => null,
        'method'    => 'DELETE',
        'sslverify' => false,
    );
    
    $request = wp_remote_post( 'http://localhost:8080/senior/'. $_SESSION["seniorId"] , $arg );
    $response     = wp_remote_retrieve_header($request , 'location');

    header("Location: https://localhost/wordpress/index.php/login");
?>