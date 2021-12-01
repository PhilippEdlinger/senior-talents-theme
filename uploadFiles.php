<?php /* Template Name: uploadFiles Page */ ?>

<?php

	$file_path = $_FILES["uploadedFile"]["tmp_name"];
	$file_type = $_FILES["uploadedFile"]["type"];
	$local_file = $file_path; 

	$post_fields = array(
		'name' => 'value',
	);

	$boundary = wp_generate_password( 24 );
	$headers  = array(
		'content-type' => 'multipart/form-data; boundary=' . $boundary,
	);

	$payload = '';
	
	foreach ( $post_fields as $name => $value ) {
		$payload .= '--' . $boundary;
		$payload .= "\r\n";
		$payload .= 'Content-Disposition: form-data; name="' . $name .
			'"' . "\r\n\r\n";
		$payload .= $value;
		$payload .= "\r\n";
	}
	if ( $local_file ) {
		$payload .= '--' . $boundary;
		$payload .= "\r\n";
		$payload .= 'Content-Disposition: form-data; name="' . 'upload' .
			'"; filename="' . basename( $local_file ) . '"' . "\r\n";
		$payload .= "\r\n";
		$payload .= file_get_contents( $local_file );
		$payload .= "\r\n";
	}
	
	$payload .= '--' . $boundary . '--';

	$upload_file_url = 'http://localhost:8080/senior/file-upload/' . $_SESSION["seniorId"].'?fileType='. $file_type;

	$response = wp_remote_post( $upload_file_url,
		array(
			'headers'    => $headers,
			'body'       => $payload,
		)
	);

	echo json_encode($response);

	//header("Location: https://localhost/wordpress/wordpress/index.php/profile");

?>