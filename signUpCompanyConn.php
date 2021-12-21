<?php /* Template Name: Company Signup DB Connection */ ?>

<?php 

    echo "test";

    $companyName = $_POST['signup_c-form-companyName'];
    $email = $_POST['signup_c-form-email'];
    $pwd = $_POST['signup_c-form-password'];

    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = array(
                'email' => $email,
                'password'   => $pwd,
                'companyName' => $companyName,
                );

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'POST',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/company/create', $arg );

    $body    = wp_remote_retrieve_body($request); 

    echo $body;

    /*
    if(substr_count($body, "n") == 0){
        header("Location: https://localhost/wordpress/wordpress/index.php/login");
    }else{
        header("Location: https://localhost/wordpress/wordpress/index.php/signup_company");
    }
    */
?>