<?php /* Template Name: Signup_Company Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup_c-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup_c.js'?>"></script>
</head>
<body>
    <div id="signup_c-form">
        <div class="signup_c-form-section">
            <input id="signup_c-companyname" type="text" placeholder="Unternehmen"></input>
        </div>
        <div class="signup_c-form-section">
            <input id="signup_c-form-email" type="text" placeholder="Email"></input>
        </div>
        <div class="signup_c-form-section">
            <input id="signup_c-form-password" type="password" placeholder="Password"></input>
            <input id="signup_c-form-password2" type="password" placeholder="Password Erneut"></input>
        </div>
        <p id="signup_c-text"> Wenn Sie kein Unternehmen sind, bitte hier 
            <a href="http://localhost/wordpress/wordpress/index.php/signup/" id="signup-link">Registrieren</a>!
        </p>
        <button id="signup_c-button"> Registrieren </button>
    </div>
</body>
