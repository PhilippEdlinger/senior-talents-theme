<?php /* Template Name: Sandbox Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/sandbox-style.php'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/sandbox.php'?>"></script>
</head>

<body>
    <?php 
    echo get_template_directory_uri() . "/img/001.png";
    ?>
    <div id="test_profile_image"> </div>

     <!-- upload file per selection -->
    <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" id="upload_file_fields" name="uploadedFile" /> 
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
</body>