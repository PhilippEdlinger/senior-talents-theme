<?php /* Template Name: searchJobOffer Page */ ?> 

<?php

    echo 'keyword: ' . $_POST["job_searchbar_word"];

    $request = wp_remote_get( 'http://localhost:8080/job-offer/getJobOffersByPartialString/'. $_POST["job_searchbar_word"] );
    $response   = wp_remote_retrieve_body($request); 

    $_SESSION["searchbar"]["joblist"] =  json_decode($response, true);

	header("Location: https://localhost/wordpress/index.php/marketplace");
?>