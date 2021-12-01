<?php /* Template Name: Profile Page */ ?>

<?php 

if(session_status() == PHP_SESSION_NONE){
    header("Location: https://localhost/wordpress/wordpress/index.php");
}

?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css'?>">
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
            <p class="nav-element">Profile</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Daten</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Über Mich</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Erfahrungen</p>
        </div>
        <div class="nav-box-element-last">
            <p class="nav-element">Lebenslauf</p>
        </div>
    </div>
    <div id="job-nav" class="nav-window">
        <div class="nav-title">
            <p class="nav-element">Jobs</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Empfohlen</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Suche</p>
        </div>
        <div class="nav-box-element-last">
            <p class="nav-element">Gespeichert</p>
        </div>
    </div>
</div>

<body>
    <div id="data-wrapper">
        <div id="profile-container">
                  <div id="profile-picture">
                      <div class="profile-headline">
                        <p>Profilbild</p>
                      </div>
                      <div class="picture-container">
                        <div class="picture"></div>
                      </div>
                      <div class="picture-upload-container">
                        <input type="file" class="picture-upload" placeholder="Eigenes Foto hochladen">    
                      </div>
                  </div>

                  <div id="profile-data">
                      <div class="profile-headline" style="width: 13vw;">
                          <p>Persönliche Daten</p>
                      </div>
                      <div class="profile-data-content">
                        <form action="<?php echo home_url( '/' ) . "index.php/dbConnection" ; ?>" method="post" class="login-form">
                            <div class="pillar-l">
                                <div class="formular">
                                    <p>Vorname</p>
                                    <input id="profile-firstName" placeholder="<?php echo $_SESSION["firstName"] ?>" > </input>
                                </div>
                                <div class="formular">
                                    <p>Nachname</p>
                                    <input id="profile-lastName" placeholder="<?php echo $_SESSION["lastName"] ?>">  </input>
                                </div>
                            </div>
                            <div class="pillar-r">
                                <div class="formular">
                                    <p>E-Mail</p>
                                    <input id="profile-email">
                                </div>
                                <div class="formular">
                                    <p>Telefonnummer</p>
                                    <input id="profile-phonenumber">
                                </div>
                                <button id="profile-save-button" type="submit">Speichern</button>
                            </div>
                            
                            
                            <div style="clear: both; color: black; width: 20%;">
                                <p>id:</p>
                                <input id="profile-seniorId" placeholder="<?php echo $_SESSION["seniorId"] ?>"> </input>
                            </div>

                            <?php /*

                            <input id="profile-hoursPerWeek" placeholder="<?php echo $_SESSION["hoursPerWeek"] ?>"> </input>
                            <input id="profile-interestDescr" placeholder="<?php echo $_SESSION["interestDescr"] ?>"> </input>
                            <input id="profile-jobBranch" placeholder="<?php echo $_SESSION["jobBranche"] ?>"></input>
                            <input id="profile-jobField" placeholder="<?php echo $_SESSION["jobField"] ?>"> </input>
                            <input id="profile-preferableWork" placeholder="<?php echo $_SESSION["preferableWork"] ?>"></input>
                            <input id="profile-skillDescr" placeholder="<?php echo $_SESSION["seniorId"] ?>"> </input> */ ?>
                            
                                
                        </form> 
                      </div>
                      
                  </div> 
            
              <div class="profile-resume">
                  <div class="profile-headline">
                    <p>Lebenslauf</p>
                  </div>
                  <div id="profile-files">
                      <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
                          <input class="floatin" type="file" id="upload_file_fields" name="uploadedFile" /> 
                          <input class="floatin" type="submit" style="width: 20%;"/>
                      </form>
                  </div>
            </div>
        </div>
    </div>
</body>
