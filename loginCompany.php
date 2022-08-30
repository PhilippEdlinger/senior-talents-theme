<?php /* Template Name: Company Login Page*/ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/loginCompany-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/loginCompany.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>

<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">UNTERNEHMEN ANMELDEN</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/company-db-connection" ; ?>" method="post" class="login-company-form">
            <div class="input-icons">
                <input placeholder="Email" name="login-company-form-input-email" id="login-company-form-input" id="login-company-form-input-email" type="text" style="border-radius: 10px 10px 0px 0px; margin-top: 3px;"></input>
                <ion-icon id="icon" name="mail-outline"></ion-icon>
            </div>
            <div class="input-icons">
                <input placeholder="Passwort" name="login-company-form-input-password" id="login-company-form-input" id="login-company-form-input-password" type="password" style="margin-top: 3px;"></input>
                <ion-icon id="icon" name="lock-closed-outline"></ion-icon>
            </div>
            <p id="signup_info"> Wenn Sie kein Unternehmen sind, bitte hier 
                <a href="https://localhost/wordpress/index.php/login" id="signup-link">Anmelden</a>!
            </p>
            <button id="login-company-button" type="submit"><h2>ANMELDEN</h2></button>
        </form>
    </div>
</body>