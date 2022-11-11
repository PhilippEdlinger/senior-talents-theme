<?php /* Template Name: Create Job Request */ ?>

<?php

    $title = $_POST['job-title'];
    $descr = $_POST['job-descr'];
    $category = $_POST['job-category'];
    $condition = $_POST['job-condition'];
    $salary = $_POST['job-salary'];
    $companyId =  $_SESSION["companyId"];

    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = array(
                'title' => $title,
                'descr'   => $descr,
                'category' => $category,
                'condition' => $condition,
                'salary' => $salary,
        );

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'POST',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/job-offer/' . $companyId . '/create', $arg );

    $body    = wp_remote_retrieve_body($request); 

    if(substr_count($body, "n") == 0){
        header("Location: https://localhost/wordpress/index.php/company-profile");
    }else{
        header("Location: https://localhost/wordpress/index.php/create-job");
    }
    
?>

