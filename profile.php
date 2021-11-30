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
                <div id="profile-firstName"> <?php echo $_SESSION["firstName"] ?> </div>
                <div id="profile-lastName"> <?php echo $_SESSION["lastName"] ?> </div>
                <div id="hoursPerWeek"> <?php echo $_SESSION["hoursPerWeek"] ?> </div>
                <div id="interestDescr"> <?php echo $_SESSION["interestDescr"] ?> </div>
                <div id="profile-jobBranch"><?php echo $_SESSION["jobBranche"] ?></div>
                <div id="profile-jobField"> <?php echo $_SESSION["jobField"] ?> </div>
                <div id="preferableWork"> <?php echo $_SESSION["preferableWork"] ?> </div>
                <div id="seniorId"> <?php echo $_SESSION["seniorId"] ?> </div>
                <div id="skillDescr"> <?php echo $_SESSION["skillDescr"] ?> </div>
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
