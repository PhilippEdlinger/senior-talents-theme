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

<div id="nav"></div>

<body>
    <div id="data-wrapper">
        <div id="profile-container">
              <div class="profile-subcontainer">
                  <div id="profile-picture"></div>
                  <div id="profile-data">
                      <form action="<?php echo home_url( '/' ) . "index.php/updateprofile" ; ?>" method="post" class="login-form">
                          <input id="profile-firstName" name="firstName" value="<?php echo $_SESSION["firstName"] ?>" > </input>
                          <input id="profile-lastName" name="lastName" value="<?php echo $_SESSION["lastName"] ?>">  </input>
                          <input id="profile-hoursPerWeek" name="hoursPerWeek" value="<?php echo $_SESSION["hoursPerWeek"] ?>"> </input>
                          <input id="profile-interestDescr" name="interestDescr" value="<?php echo $_SESSION["interestDescr"] ?>"> </input>
                          <input id="profile-jobBranch" name="jobBranche" value="<?php echo $_SESSION["jobBranche"] ?>"></input>
                          <input id="profile-jobField" name="jobField" value="<?php echo $_SESSION["jobField"] ?>"> </input>
                          <input id="profile-preferableWork" name="preferableWork" value="<?php echo $_SESSION["preferableWork"] ?>"></input>
                          <input id="profile-seniorId" name="seniorId" value="<?php echo $_SESSION["seniorId"] ?>"> </input>
                          <input id="profile-skillDescr" name="skillDescr" value="<?php echo $_SESSION["skillDescr"] ?>"> </input>
                          <button id="profile-save-button" type="submit">Speichern</button>
                      </form> 
                  </div> 
              </div>
              <div class="profile-subcontainer subcontainer2">
                  <div id="profile-description"></div>
                  <div id="profile-files">
                      <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
                          <input type="file" id="upload_file_fields" name="uploadedFile" /> 
                          <input type="submit"/>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>

