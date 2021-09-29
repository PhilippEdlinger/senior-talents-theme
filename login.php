<?php /* Template Name: Login Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/login-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/login.js'?>"></script>
</head>

<body>
<div class="login-form">
    <div class="login-form-section">
            <input placeholder="Email" id="login-form-input-email" type="text"></input>
    </div>
    <div class="login-form-section">
            <input placeholder="Password" id="login-form-input-password" type="password"></input>
    </div>
    <button id="login-button">Login</button>
</div>
<?php 
    $response = wp_remote_get( 'http://localhost:8080/senior?email=bertl&password=UwU');
    $body     = wp_remote_retrieve_body($response);
    echo $body;
?>
</body>