<?php /* Template Name: uploadFiles Page */ ?>

<?php
/*
    $uwu = $_FILES["uploadedFile"];

    echo "uploaded file " . $_FILES["uploadedFile"]["name"] . " | ";
    echo json_encode($uwu) . " | " . gettype($uwu);

    $handle = fopen($_FILES["uploadedFile"]["tmp_name"], 'r');
    */
    $file_path = $_FILES["uploadedFile"]["tmp_name"];


    // ################

$local_file = $file_path; //path to a local file on your server
$post_fields = array(
	'name' => 'value',
);
$boundary = wp_generate_password( 24 );
$headers  = array(
	'content-type' => 'multipart/form-data; boundary=' . $boundary,
);
$payload = '';
// First, add the standard POST fields:
foreach ( $post_fields as $name => $value ) {
	$payload .= '--' . $boundary;
	$payload .= "\r\n";
	$payload .= 'Content-Disposition: form-data; name="' . $name .
		'"' . "\r\n\r\n";
	$payload .= $value;
	$payload .= "\r\n";
}
// Upload the file
if ( $local_file ) {
	$payload .= '--' . $boundary;
	$payload .= "\r\n";
	$payload .= 'Content-Disposition: form-data; name="' . 'upload' .
		'"; filename="' . basename( $local_file ) . '"' . "\r\n";
	//        $payload .= 'Content-Type: image/jpeg' . "\r\n";
	$payload .= "\r\n";
	$payload .= file_get_contents( $local_file );
	$payload .= "\r\n";
}
$payload .= '--' . $boundary . '--';

$response = wp_remote_post( 'http://localhost:8080/senior/file-upload/1',
	array(
		'headers'    => $headers,
		'body'       => $payload,
	)
);

echo json_encode($response);

?>