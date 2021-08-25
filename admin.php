<?php /* Template Name: Manage Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/admin-style.css'?>">
</head>

<body>
    <table border="2" >
    <tr>
        <td> Name </td>
        <td> Age </td> 
    </tr> 
    <?php
        include "dbConnection.php"; 
        $records = mysqli_query($db,"select * from Test"); 
        while($data = mysqli_fetch_array($records)){
    ?>        
    
    <tr>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['Age']; ?></td>
    </tr>	

    <?php
    }
    ?>
       
    </table>

    <!-- 
    <div id="admin-maincontent">
        <div id="admin-taskbar"></div>
        <div id="admin-option-container">
            <div class="admin-info-buttons admin-user-info" ></div>
            <div class="admin-info-buttons" id="admin-company-info"></div>          
        </div> 
        <div>
    -->     
</body>


