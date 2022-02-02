<?php
header("Content-type: text/css");

$backgroundcolor = "white";
$imagePath= "https://localhost/wordpress/wordpress/wp-content/themes/senior-talents-theme/img/001.png";
$imageData= $_SESSION["imageData"];

?>

body{
  background-color: <?php echo $backgroundcolor?>;
}

#drop_file_zone {
    background-color: #EEE;
    border: #999 5px dashed;
    width: 290px;
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
#drag_upload_file {
  width:50%;
  margin:0 auto;
}
#drag_upload_file p {
  text-align: center;
} 
#drag_upload_file #selectfile {
  display: none;
}

#test_profile_image{
    height: 100px;
    width: 100px;
    border: 1px solid black;
   background-image: url(<?php echo $imagePath; ?>);
   background-position:center;
    background-size: 100%;
  }
