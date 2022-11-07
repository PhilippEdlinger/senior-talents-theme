<?php /* Template Name: saved_senior */ ?>

<?php 
if(session_status() == PHP_SESSION_NONE){
    header("Location: https://localhost/wordpress/index.php");
}
?>

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
        <a href="https://localhost/wordpress/index.php/profile/#pp">
        <div class="nav-box-element">
            <p class="nav-element">Daten</p>
            <ion-icon class="nav-icons" name="reader-outline"></ion-icon>
        </div>
        </a>
        <a href="https://localhost/wordpress/index.php/profile/#pd">
        <div class="nav-box-element">
            <p class="nav-element">Über Mich</p>
            <ion-icon class="nav-icons" name="person-outline"></ion-icon>
        </div>
        </a>
        <a href="https://localhost/wordpress/index.php/profile/#ji">
        <div class="nav-box-element" style="border-radius: 0px 0px 12px 0px;">
            <p class="nav-element">Job Interessen</p>
            <ion-icon class="nav-icons" name="star-outline"></ion-icon>
        </div>
        </a>
    </div>
    <div id="job-nav" class="nav-window">
        <div class="nav-title">
            <h2 class="nav-element">Jobs</h2>
        </div>
        <a href="https://localhost/wordpress/index.php/suggestion-senior/">
        <div class="nav-box-element">
            <p class="nav-element">Empfohlen</p>
            <ion-icon class="nav-icons" name="book-outline"></ion-icon>
        </div>
        </a>
        <a href="https://localhost/wordpress/index.php/marketplace/">
        <div class="nav-box-element">
            <p class="nav-element">Suche</p>
            <ion-icon class="nav-icons" name="search"></ion-icon>
        </div>
        </a>
        <a href="https://localhost/wordpress/index.php/saved-senior/">
        <div class="nav-box-element" style="border-radius: 0px 0px 12px 0px;">
            <p class="nav-element">Gespeichert</p>
            <ion-icon class="nav-icons" name="bookmark-outline"></ion-icon>
        </div>
        </a>
    </div>

    <div class="settings">
        <a style="text-decoration: none;" href="https://localhost/wordpress/index.php/senior-settings/">
            <p>Einstellungen</p> 
        </a>
        <ion-icon class="settings-icon" name="settings-outline"></ion-icon>               
    </div>
</div>

<body>
    <div id="data-wrapper">
        <div id="suggestion-container">
            <?php 
            for($i=10;$i>0;$i--){
            echo '
            <div class="job_sugg">
                <div class="job_unterteilung" style="min-height: 2vw; background-color: whitesmoke; padding: 0px 0px 0px 1vw; border-radius: 6px;">
                    <h3>Der Job Titel</h3>
                </div>
                <hr>
                <div class="job_unterteilung">
                    <p>Genauere Bezeichnung der Job Tätigkeit.<br>
                    Kurzbeschreibung was zu tun wäre.</p>
                </div>
                <hr>
                <div class="job_unterteilung">
                    <p>Postleitzahl des Ortes<br>
                    Kurzbezeichnung der Arbeitszeit (Vollzeit, Halbzeit, etc.<br>
                    Lohn, entweder Stundenlohn, oder Monatslohn</p>
                </div>
                <hr>
                <div class="job_buttons">
                    <div id="job_button" class="saved_job_delete">
                        <p>Entfernen</p>
                    </div>
                    <div id="job_button" class="job_more">
                        <p>Mehr Erfahren</p>
                    </div>
                </div>
            </div>' ; 
            }
            ?>
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


