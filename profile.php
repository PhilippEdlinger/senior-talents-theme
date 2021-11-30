<?php /* Template Name: Profile Page */ ?>

<?php 

if(session_status() == PHP_SESSION_NONE){
    header("Location: https://localhost/wordpress/wordpress/index.php");
}

?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css'?>">
</head>

<body>
     <div id="profile-container">
        <div class="profile-subcontainer">
            <div id="profile-picture"></div>
            <div id="profile-data">
                <form action="<?php echo home_url( '/' ) . "index.php/dbConnection" ; ?>" method="post" class="login-form">
                    <input id="profile-firstName" placeholder="<?php echo $_SESSION["firstName"] ?>" > </input>
                    <input id="profile-lastName" placeholder="<?php echo $_SESSION["lastName"] ?>">  </input>
                    <input id="profile-hoursPerWeek" placeholder="<?php echo $_SESSION["hoursPerWeek"] ?>"> </input>
                    <input id="profile-interestDescr" placeholder="<?php echo $_SESSION["interestDescr"] ?>"> </input>
                    <input id="profile-jobBranch" placeholder="<?php echo $_SESSION["jobBranche"] ?>"></input>
                    <input id="profile-jobField" placeholder="<?php echo $_SESSION["jobField"] ?>"> </input>
                    <input id="profile-preferableWork" placeholder="<?php echo $_SESSION["preferableWork"] ?>"></input>
                    <input id="profile-seniorId" placeholder="<?php echo $_SESSION["seniorId"] ?>"> </input>
                    <input id="profile-skillDescr" placeholder="<?php echo $_SESSION["seniorId"] ?>"> </input>
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
</body>
