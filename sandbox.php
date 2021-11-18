<?php /* Template Name: Sandbox Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/sandbox-style.css'?>">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri() . '/js/sandbox.js'?>"></script>
</head>

<body>
    <!-- upload file -->

    <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
         <input type="file" name="uploadedFile" />
         <input type="submit"/>
      </form>


</body>