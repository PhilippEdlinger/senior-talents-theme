<?php /* Template Name: uploadFiles Page */ ?>

<?php

	$file_path = $_FILES["uploadedFile"]["tmp_name"];
	$file_type = $_FILES["uploadedFile"]["type"];
	$local_file = $file_path; 

	//echo $file_path . "###" . $file_type;

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

	/*
	$file_size=$_FILES['uploadedFile']['size'];
    $file_tmp= $_FILES['uploadedFile']['tmp_name'];
	
    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
    $data = file_get_contents($file_tmp);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    echo $base64;
	*/

	$encodedString = base64_encode($_FILES["uploadedFile"]["tmp_name"]);
	//echo $encodedString;
	$imagedata = file_get_contents($_FILES["uploadedFile"]["tmp_name"]);
             // alternatively specify an URL, if PHP settings allow
	$base64 = base64_encode($imagedata);
	//echo $base64;

	 
	file_put_contents('img/my-quick-file.png', file_get_contents($base64));

	/*
	$decodedString = base64_decode($encodedString);
	$decodedeImage = imageCreateFromString(d$decodedString);
	*/

	//header("Location: https://localhost/wordpress/wordpress/index.php/profile");
?>