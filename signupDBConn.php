<?php /* Template Name: Signup DB Connection */ ?> 

<?php 
    $firstname = $_POST['signup-form-firstname'];
    $lastname = $_POST['signup-form-lastname'];
    $email = $_POST['signup-form-email'];
    $pwd = $_POST['signup-form-password'];
    $pwd2 = $_POST['signup-form-password'];

    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = array(
                'email' => $email,
                'password'   => $pwd,
                'firstName' => $firstname,
                'lastName' => $lastname,
        );

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'POST',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/senior/create', $arg );

    $body     = wp_remote_retrieve_body($request); 

    if(substr_count($body, "n") == 0){
        header("Location: https://localhost/wordpress/wordpress/index.php/login");
    }else{
        header("Location: https://localhost/wordpress/wordpress/index.php/signup");
    }
?>