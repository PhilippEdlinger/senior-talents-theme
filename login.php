<?php /* Template Name: Login Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/login-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/login.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>

<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">BENUTZERKONTO ANMELDEN</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/dbConnection" ; ?>" method="post" class="login-form">
            <div class="input-icons">
                <input placeholder="Email" name="login-form-input-email" id="login-form-input" id="login-form-input-email" type="text" style="border-radius: 10px 10px 0px 0px; margin-top: 3px;"></input>
                <ion-icon id="icon" name="mail-outline"></ion-icon>
            </div>
            <div class="input-icons">
                <input placeholder="Passwort" name="login-form-input-password" id="login-form-input" id="login-form-input-password" type="password" style="margin-top: 3px;"></input>
                <ion-icon id="icon" name="lock-closed-outline"></ion-icon>
            </div>
            <p id="signup_info"> Sind Sie ein Unternehmen? Hier 
                <a href="http://localhost/wordpress/wordpress/index.php/login-company/" id="signup_c-link">Anmelden</a>!
            </p>
            <button id="login-button" type="submit"><h2>ANMELDEN</h2></button>
        </form>
    </div>
    
</body>