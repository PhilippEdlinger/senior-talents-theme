<?php /* Template Name: searchsenior Page */ ?> 

<?php

    echo 'keyword: ' . $_POST["senior_searchbar_word"];

    $request = wp_remote_get( 'http://localhost:8080/senior/getAllByBranche/'. $_POST["senior_searchbar_word"] );
    $response   = wp_remote_retrieve_body($request); 

    $_SESSION["searchbar"]["seniorList"] =  json_decode($response, true);

	header("Location: https://localhost/wordpress/index.php/marketplace-senior");
?>