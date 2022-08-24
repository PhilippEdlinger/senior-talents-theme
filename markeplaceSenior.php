<?php /* Template Name: marketplace senior page*/ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css?'?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <script src="<?php echo get_template_directory_uri() . '/js/marketplace.js'?>"></script>
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
            <a href="https://localhost/wordpress/wordpress/index.php/profile">
                <p class="nav-element">Daten</p>
            </a>
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
            <p class="nav-element">Suche</p>
            <ion-icon class="nav-icons" name="search"></ion-icon>
        </div>
        <div class="nav-box-element-last">
            <p class="nav-element">Gespeichert</p>
        </div>
    </div>

    <div class="settings">
    <a style="text-decoration: none;" href="https://localhost/wordpress/wordpress/index.php/senior-settings/">
        <p>Einstellungen</p> 
    </a>
        <ion-icon class="settings-icon" name="settings-outline"></ion-icon>               
    </div>
</div>

<body>
    <div id="data-wrapper">
        <div id="profile-container">
            <div class="profile-headline", style="margin-top: 10px;">
                <p>Suche</p>
            </div>
    <form action="<?php echo home_url( '/' ) . "index.php/searchseniorrequest" ; ?>"  method="post">
        <div class="sections">
            <div class="input-icons02">
                <input class="profile-input-form-suche" placeholder="Nach Senioren Per Branche Suchen..." type="text" id="job_searchbar_word" name="senior_searchbar_word"></input>
                <ion-icon class="icon" name="search"></ion-icon>
            </div>
            <button id="login-button" class="profile-save-button-suche" type="submit"><h2>Suchen</h2></button>
        </div>
        
    </form>
    
    <div id="job-container">
    <?php 
   
   if ($_SESSION["searchbar"]["seniorList"] == null){
    $request = wp_remote_get( 'http://localhost:8080/senior/all');
    $body    = wp_remote_retrieve_body($request); 
    $seniorList = json_decode($body, true);

    foreach ($seniorList as $job){
    echo '<div class="joboffer">
            <h3  class="joboffer-title">' . $job["skillDescr"] . '</h3>
            <p name="joboffer-category" class="joboffer-category">Jobfeld: ' . $job["jobField"] . '</p>
            <p class="joboffer-descr">Branche: '. $job["jobBranche"] .'</p>
            <p>Kennnummer: '. $job["id"] .'</p>
            </div>';
        }
    }else {
    $seniorList = $_SESSION["searchbar"]["seniorList"];
        
    foreach ($seniorList as $job){
        echo '<div class="joboffer">
            <h3  class="joboffer-title">' . $job["skillDescr"] . '</h3>
            <p name="joboffer-category" class="joboffer-category">Jobfeld: ' . $job["jobField"] . '</p>
            <p class="joboffer-descr">Branche: '. $job["jobBranche"] .'</p>
            <p>Kennnummer: '. $job["id"] .'</p>
            </div>';
            }
    }    
        ?>
    </div>
    
           
        </div>
    </div>
    
</body>

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