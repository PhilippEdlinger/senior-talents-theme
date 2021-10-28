<?php /* Template Name: Login Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/login-style.css'?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/login.js'?>"></script>
</head>

<body>
<div class="login-form">
    <div class="login-form-section">
            <input placeholder="Email" id="login-form-input-email" type="text">
    </div>
    <div class="login-form-section">
            <input placeholder="Password" id="login-form-input-password" type="password">
    </div>
	
	<p id="signup_info"> Haben Sie noch keinen Account? Hier
			<a href="http://localhost/wordpress/signup/" id="signup_c-link">Registrieren</a>!
	</p>
	
    <button id="login-button">Login</button>
</div>
<?php 
    $response = wp_remote_get( 'http://localhost:8080/senior?email=bertl&password=UwU');
    $body     = wp_remote_retrieve_body($response);
    echo $body;
?>
</body>