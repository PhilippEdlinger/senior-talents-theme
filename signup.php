<?php /* Template Name: Signup Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">ACCOUNT REGISTER</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/signup-db-connection" ; ?>" id="signup-form" method="post">
            <div class="signup-form-section">
                <div class="input-icons">
                    <input name="signup-form-firstname" id="signup-form-input_01" id="signup-form-firstname" type="text" placeholder="Vorname"></input>
                    <ion-icon id="icon1" name="bookmark-outline"></ion-icon>
                    <input name="signup-form-lastname" id="signup-form-input_01" id="signup-form-lastname" type="text" placeholder="Nachname"></input>
                    <ion-icon id="icon2" name="bookmark-outline"></ion-icon>
                </div>
            </div>
            <div class="signup-form-section">
                <div class="input-icons">
                    <input name="signup-form-email" id="signup-form-input_02" id="signup-form-email" type="text" placeholder="Email"></input>
                    <ion-icon id="icon1" name="mail-outline"></ion-icon>
                </div>
            </div>
            <div class="signup-form-section">
                <div class="input-icons">
                    <input name="signup-form-password" id="signup-form-input_01" id="signup-form-password" type="password" placeholder="Password"></input>
                    <ion-icon id="icon1" name="lock-closed-outline"></ion-icon>
                    <input name="signup-form-password2" id="signup-form-input_01" id="signup-form-password2" type="password" placeholder="Password"></input>
                    <ion-icon id="icon2" name="lock-open-outline"></ion-icon>
                </div>
            </div>
            <p id="signup_info"> Sind Sie ein Unternehmen? Hier 
                <a href="http://localhost/wordpress/wordpress/index.php/signup_company/" id="signup_c-link">Registrieren</a>!
            </p>
            <button type="submit" id="signup-button"><h2>REGISTER</h2></button>
        </form>
    </div>
    
</body>


