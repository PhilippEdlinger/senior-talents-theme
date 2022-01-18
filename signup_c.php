<?php /* Template Name: Signup_Company Page */ ?>

<head>
    <script src="<?php echo get_template_directory_uri() . '/js/signup_c.js'?>"></script>
</head>
<body>
    <form id="signup_c-form" action="<?php echo home_url( '/' ) . "index.php/company-signup-db-connection" ; ?>" method="post">
        <div class="signup_c-form-section">
            <input name="signup_c-form-companyName" id="signup_c-companyname" type="text" placeholder="Unternehmen"></input>
        </div>
        <div class="signup_c-form-section">
            <input name="signup_c-form-email" id="signup_c-form-email" type="text" placeholder="Email"></input>
        </div>
        <div class="signup_c-form-section">
            <input name="signup_c-form-password" id="signup_c-form-password" type="password" placeholder="Passwort"></input>
            <input id="signup_c-form-password2" type="password" placeholder="Passwort Erneut"></input>
        </div>
        <p id="signup_c-text"> Wenn Sie kein Unternehmen sind, bitte hier 
            <a href="http://localhost/wordpress/wordpress/index.php/signup/" id="signup-link">Registrieren</a>!
        </p>
        <button type="submit" id="signup_c-button"> REGISTRIEREN </button>
    </form>
</body>


<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup_c-style.css'?>">
