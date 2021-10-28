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
        );

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'POST',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/senior/create', $arg );
    echo json_encode($body) . "<br>";
    echo json_encode($request);
?>