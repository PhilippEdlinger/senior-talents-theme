<?php /* Template Name: Profile Page */ ?>

<?php 

if(isset($_SESSION)){
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
            <div id="profile-data"></div> 
        </div>
        <div class="profile-subcontainer subcontainer2">
            <div id="profile-description"></div>
            <div id="profile-files"></div>
        </div>
    </div>
</body>
