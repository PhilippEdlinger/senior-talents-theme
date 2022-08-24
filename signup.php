<?php /* Template Name: Signup Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">BENUTZERKONTO REGISTRIEREN</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/signup-db-connection" ; ?>" id="signup-form" method="post">
            <div class="sections">
                <div class="input-icons01"style="margin-top: 4px;">
                    <input name="signup-form-firstname" class="signup-form-input" id="signup-form-firstname" type="text" placeholder="Vorname"></input>
                    <ion-icon class="icon" name="bookmark-outline"></ion-icon>
                </div>
                <div class="input-icons01"style="margin-top: 4px;">    
                    <input name="signup-form-lastname" class="signup-form-input" id="signup-form-lastname" type="text" placeholder="Nachname"></input>
                    <ion-icon class="icon" name="bookmark-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup-form-email" class="signup-form-input" id="signup-form-email" type="text" placeholder="Email"></input>
                    <ion-icon class="icon" name="mail-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons01">
                    <input name="signup-form-password" class="signup-form-input" id="signup-form-password" type="password" placeholder="Passwort"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
                <div class="input-icons01">    
                    <input name="signup-form-password2" class="signup-form-input" id="signup-form-password2" type="password" placeholder="Passwort"></input>
                    <ion-icon class="icon" name="lock-open-outline"></ion-icon>
                </div>
            </div>
            <p id="signup_info"> Sind Sie ein Unternehmen? Hier 
                <a href="http://diemandel.at/?page_id=51" id="signup_c-link">Registrieren</a>!
            </p>
            <button type="submit" id="signup-button"><h2>REGISTRIEREN</h2></button>
        </form>
    </div>
    
</body>


