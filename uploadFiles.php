<?php /* Template Name: uploadFiles Page */ ?>

<?php
	$i = 0;
	$file_path = "/opt/lampp/htdocs/wordpress/wp-content/themes/senior-talents-theme/img/". $_FILES["uploadedFile"]['name'];

	while( file_exists( $file_path ) ) {
		$i++;
		$file_path = "/opt/lampp/htdocs/wordpress/wp-content/themes/senior-talents-theme/img/".  $i . $_FILES["uploadedFile"]['name'];
		$_FILES["uploadedFile"]['name'] = $i . $_FILES["uploadedFile"]['name'];
	}

	// changed  permissions of img directory and uploadfile.php
	if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $file_path)) {
		// ######### TODO:  update file path request ##############

		$headers = array(
			'Content-Type'  => 'application/json',
		);
	
		$body = array(
			'body' => 'body',
		);
	
		$arg = array(
			'headers'   => $headers, 
			'body'      => json_encode( $body ),
			'method'    => 'PUT',
			'sslverify' => false,
		);
	
		$_SESSION["imageData"] = "/img/" . $_FILES["uploadedFile"]['name'];

		$request = wp_remote_post( 'http://localhost:8080/senior/updateImageUrl/'. $_SESSION["seniorId"] .'/%2Fimg%2F' . $_FILES["uploadedFile"]['name'], $arg );			
		$body    = wp_remote_retrieve_body($request); 
		
		echo json_encode($request);
	} else {
	   echo "File not uploadedFile";
	}
	
		header("Location: https://localhost/wordpress/index.php/profile");
	?>