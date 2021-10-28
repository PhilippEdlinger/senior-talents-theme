<?php /* Template Name: Signup Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
</head>
<body>
    <div id="signup-form">
        <div class="signup-form-section">
            <input id="signup-form-firstname" type="text" placeholder="Vorname">
            <input id="signup-form-lastname" type="text" placeholder="Nachname">
        </div>
        <div class="signup-form-section">
            <input id="signup-form-email" type="text" placeholder="Email">
        </div>
        <div class="signup-form-section">
            <input id="signup-form-password" type="password" placeholder="Password">
            <input id="signup-form-password2" type="password" placeholder="Password Erneut">
        </div>
        <p id="signup_info"> Sind Sie ein Unternehmen? Hier 
            <a href="http://localhost/wordpress/wordpress/index.php/signup_company/" id="signup_c-link">Registrieren</a>!
        </p>
		<p id="signup_info"> Haben Sie bereits schon einen Account? Hier
			<a href="http://localhost/wordpress/login/" id="signup_c-link">Login</a>!
		</p>
        <button id="signup-button"> Registrieren </button>
    </div>
</body>


