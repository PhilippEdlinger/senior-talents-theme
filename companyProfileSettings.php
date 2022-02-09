<?php /* Template Name: company profile settings */ ?>


<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css'?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>

<header>
    <div class="header-container">
        <div class="header-image">
            <div id="logo-image"></div>
        </div>
    </div>
</header>

<div id="nav">
<div id="profile-nav" class="nav-window">
        <div  class="nav-title">
            <h2 class="nav-element">Profile</h2>
        </div>
        <a href="#pp">
        <div class="nav-box-element">
            <p class="nav-element">Daten</p>
        </div>
        </a>
        <a href="#pd">
        <div class="nav-box-element">
            <p class="nav-element">Über Mich</p>
        </div>
        </a>
        <a href="#ji">
        <div class="nav-box-element-last">
            <p class="nav-element">Job Interessen</p>
        </div>
        </a>
    </div>
    <div id="job-nav" class="nav-window">
        <div class="nav-title">
            <h2 class="nav-element">Jobs</h2>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Empfohlen</p>
        </div>
        <div class="nav-box-element">
        <a href="https://localhost/wordpress/wordpress/index.php/marketplace/">
            <p class="nav-element">Suche</p>
        </a>
            <ion-icon class="nav-icons" name="search"></ion-icon>
        </div>
        <div class="nav-box-element-last">
            <p class="nav-element">Gespeichert</p>
        </div>
    </div>

    <div class="settings">
    <a href="http://localhost/wordpress/wordpress/index.php/company-profile-settings/">
        <p>Einstellungen</p> 
    </a>
        <ion-icon class="settings-icon" name="settings-outline"></ion-icon>               
    </div>
</div>

<body id="pp">
    <div id="data-wrapper">
            <div id="profile-container">
                <div id="profile-picture">
                    <div class="profile-headline" style="margin-top: 10px;">
                    <p>Benutzer Einstellung</p>
                    </div>
                </div>
                <div id="profile-data">
                    <a href="https://localhost/wordpress/wordpress/index.php/update-company-password/"> <div style="color:black;" id="change-pw-button"> Passwort ändern </div> </a>
                    <a href="https://localhost/wordpress/wordpress/index.php/update-company-email/"> <div style="color:black;" id="change-pw-button"> Email ändern </div> </a>
                    <div style="color:black;" id="delete-profile"> Benutzerkonto löschen </div>
                </div> 
            </div>
              
            <div class="profile-subcontainer subcontainer2">
                  
            </div>
        </div>
        <div id="footer-container">
    <div class="footer-center">
        <div class="column">
            <p>Mag. Doris Mandel, DA<br><br>
            Lärchenauerstraße 2e<br><br>
            4020 Linz-Zaubertal</p> 
        </div>
        <div class="icon-div" >
            <a href="https://www.facebook.com/DieMandel.at/">
                <ion-icon class="social-icons" name="logo-facebook"></ion-icon><br>
            </a>
            <a href="https://www.instagram.com/_diemandel_/">
                <ion-icon class="social-icons" style="margin-top: 4px;" name="logo-instagram"></ion-icon><br>
            </a>
            <a href="https://www.linkedin.com/in/doris-mandel-aa8690a6/">
                <ion-icon class="social-icons" style="margin-top: 4px;" name="logo-linkedin"></ion-icon><br>             
            </a>
            </div>
        <div class="column">
            <p>+43 676 7504925<br><br>
            doris@dieMandel.at<br><br>
            www.dieMandel.at</p>
        </div>
    </div>
    
    <p class="copyright">© Senior-Talents, 2022</p>
</div>
    </div>
</body>


