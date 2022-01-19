<?php /* Template Name: Signup_Company Page */ ?>

<head>
    <script src="<?php echo get_template_directory_uri() . '/js/signup_c.js'?>"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup_c-style.css'?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body class="background">
    <div class="content-wrapper">
        <h1 class="headline">UNTERNEHMEN REGISTRIEREN</h1>
        <form id="signup-form" action="<?php echo home_url( '/' ) . "index.php/company-signup-db-connection" ; ?>" method="post">
            <div class="sections">
                <div class="input-icons02"  style="margin-top: 4px;">
                    <input name="signup_c-form-companyName" id="signup_c-companyname" class="signup-form-input" type="text" placeholder="Unternehmen"></input>
                    <ion-icon class="icon"name="briefcase-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup_c-form-email" id="signup_c-form-email" class="signup-form-input" type="text" placeholder="Email"></input>
                    <ion-icon class="icon" name="mail-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons01">
                    <input name="signup_c-form-password" id="signup_c-form-password" class="signup-form-input" type="password" placeholder="Passwort"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
                <div class="input-icons01">
                    <input id="signup_c-form-password2" class="signup-form-input" type="password" placeholder="Passwort Erneut"></input>
                    <ion-icon class="icon" name="lock-open-outline"></ion-icon>
                </div>
            </div>
            <p id="signup_info"> Wenn Sie kein Unternehmen sind, bitte hier 
                <a href="http://localhost/wordpress/wordpress/index.php/signup/" id="signup-link">Registrieren</a>!
            </p>
            <button type="submit" id="signup-button"><h2>REGISTRIEREN</h2></button>
        </form>
    </div>
</body>



