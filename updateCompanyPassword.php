<?php /* Template Name: update company password */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">Passwort Ändern</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/updateCompanyPasswordRequest" ; ?>" id="signup-form" method="post">
            <div class="sections">
                <div class="input-icons02"style="margin-top: 4px;">
                    <input name="signup-form-firstname" class="signup-form-input" id="signup-form-firstname" type="password" placeholder="Altes Passwort"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup-form-email" class="signup-form-input" id="signup-form-email" type="password" placeholder="Neues Passwort"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup-form-password" class="signup-form-input" id="signup-form-password" type="password" placeholder="Neues Passwort Erneut"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
            </div>
            <button type="submit" id="signup-button"><h2>Speichern</h2></button>
        </form>
    </div>
    
</body>


