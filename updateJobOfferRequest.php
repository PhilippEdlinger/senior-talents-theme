<?php /* Template Name: updateJobOfferRequest */ ?>

<?php 

    $headers = array(
        'Content-Type'  => 'application/json',
    );

    $body = array(
        'title' => $_POST["joboffer-title"],
        'descr'   => $_POST["joboffer-descr"],
        'category' => $_POST["joboffer-category"],
        'condition' => $_POST["joboffer-condition"],
        'salary' => $_POST["joboffer-salary"],
        'id' => $_POST["joboffer-id"],
       );  

    $arg = array(
        'headers'   => $headers, 
        'body'      => json_encode( $body ),
        'method'    => 'PUT',
        'sslverify' => false,
    );

    $request = wp_remote_post( 'http://localhost:8080/job-offer/update', $arg );
    $response     = wp_remote_retrieve_body($request); 

   header("Location: https://localhost/wordpress/index.php/company-profile");  
?>           