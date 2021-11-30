<?php /* Template Name: Login Page */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/login-style.css?'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/login.js'?>"></script>
</head>

<body>
<div class="header-container">
<div class="header-image">
    <div id="logo-image"></div>
    </div>
</div>

<form action="<?php echo home_url( '/' ) . "index.php/dbConnection" ; ?>" method="post" class="login-form">
    <div class="login-form-section">
            <input placeholder="Email" name="login-form-input-email" id="login-form-input-email" type="text"></input>
    </div>
    <div class="login-form-section">
            <input placeholder="Password" name="login-form-input-password" id="login-form-input-password" type="password"></input>
    </div>
    <button id="login-button" type="submit">Login</button>
</form>
</body>