<?php /* Template Name: update company email */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/signup-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/signup.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body class="background">

    <div class="content-wrapper">
        <h1 class="headline">Email Ändern</h1>
        <form action="<?php echo home_url( '/' ) . "index.php/updateCompanyEmailRequest" ; ?>" id="signup-form" method="post">
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup-form-email" class="signup-form-input" id="signup-form-email" type="text" placeholder="Neue Email"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons02">
                    <input name="signup-form-password" class="signup-form-input" id="signup-form-password" type="text" placeholder="Neue Email Erneut"></input>
                    <ion-icon class="icon" name="lock-closed-outline"></ion-icon>
                </div>
            </div>
            <button type="submit" id="signup-button"><h2>Speichern</h2></button>
        </form>
    </div>    
</body>


