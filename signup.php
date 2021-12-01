<?php /* Template Name: Signup Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
</head>
<body>
    <?php
        echo  wp_remote_retrieve_body(wp_remote_get("http://localhost:8080/senior/create"));
    ?>
    <form action="<?php echo home_url( '/' ) . "index.php/signup-db-connection" ; ?>" id="signup-form" method="post">
        <div class="signup-form-section">
            <input name="signup-form-firstname" id="signup-form-firstname" type="text" placeholder="Vorname"></input>
            <input name="signup-form-lastname" id="signup-form-lastname" type="text" placeholder="Nachname"></input>
        </div>
        <div class="signup-form-section">
            <input name="signup-form-email" id="signup-form-email" type="text" placeholder="Email"></input>
        </div>
        <div class="signup-form-section">
            <input name="signup-form-password" id="signup-form-password" type="password" placeholder="Password"></input>
            <input name="signup-form-password2" id="signup-form-password2" type="password" placeholder="Password Erneut"></input>
        </div>
        <p id="signup_info"> Sind Sie ein Unternehmen? Hier 
            <a href="http://localhost/wordpress/wordpress/index.php/signup_company/" id="signup_c-link">Registrieren</a>!
        </p>
        <button type="submit" id="signup-button"> Registrieren </button>
    </form>
</body>


