<?php /* Template Name: Signup Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
</head>
<body>
    <div id="signup-form">
        <div class="signup-form-section">
            <input id="signup-form-firstname" type="text" placeholder="Vorname"></input>
            <input id="signup-form-lastname" type="text" placeholder="Nachname"></input>
        </div>
        <div class="signup-form-section">
            <input id="signup-form-email" type="text" placeholder="Email"></input>
        </div>
        <div class="signup-form-section">
            <input id="signup-form-password" type="password" placeholder="Password"></input>
            <input id="signup-form-password2" type="password" placeholder="Password Erneut"></input>
        </div>
        <button id="signup-button"> Registrieren </button>
    </div>
</body>


