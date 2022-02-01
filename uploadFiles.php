<?php /* Template Name: uploadFiles Page */ ?>

<?php
	$i = 0;
	$file_path = "/opt/lampp/htdocs/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/". $_FILES["uploadedFile"]['name'];

	while( file_exists( $file_path ) ) {
		$i++;
		$file_path = "/opt/lampp/htdocs/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/".  $i . $_FILES["uploadedFile"]['name'];
	}

	// changed  permissions of img directory and uploadfile.php
	if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $file_path)) {
		// ######### TODO:  update file path request ##############
		$_SESSION["imageData"] = "/img/" . $_FILES["uploadedFile"]['name'];
		echo "File uploaded";
	} else {
	   echo "File not uploadedFile";
	}
	
	header("Location: https://localhost/wordpress/wordpress/index.php/profile");
	//echo $_POST["contact_list"]; 
	?>