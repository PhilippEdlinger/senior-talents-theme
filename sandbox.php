<?php /* Template Name: Sandbox Page */ ?>

<?php 
    session_start();
    $newImg = "https://localhost/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/002.png"; 
    setcookie("test", "https://localhost/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/002.png" );
?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/sandbox-style.php'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/sandbox.php'?>"></script>
</head>

<body>
    <?php echo get_template_directory_uri(); ?>
    <div id="test_profile_image"> </div>

     <!-- upload file per selection -->
    <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" id="upload_file_fields" name="uploadedFile" />
        <textarea id="contact_list" name="contact_list"></textarea>
        <input type="submit"/>
    </form>

    <!-- upload file per drag and drop -->
    <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
        <div id="drag_upload_file">
            <p>Drop file here</p>
            <p>or</p>
            <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
            <input type="file" id="selectfile" />
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri() . '/js/sandbox.js'?>"></script>

    <!-- drop down select -->
    <select name="jobField" >
        <option value="rigatoni">Rigatoni</option>
        <option value="dave">Dave</option>
        <option value="pumpernickel" selected >Pumpernickel</option>
        <option value="reeses">Reeses</option>
    </select>

    <!--- file uploader --->
</body>


<!-- 
< ? php
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0].
'wp-load.php';
require_once($wp_load);

/**
Do stuff like connect to WP database and grab user set values
*/

header('Content-type: text/css');
header('Cache-control: must-revalidate'); ?
>
-->
