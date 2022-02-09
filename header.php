 <?php wp_head(); ?>
 <head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'?>">
</head>

<div class="header-container" style="margin-top: 0px;">
    <div class="header-image">
        <div id="logo-image"></div>
    </div>
    <div class="dropdown-profile">
        <div class="dd-button">
        <ion-icon name="person-circle-outline"></ion-icon>
        </div>
        <div class="dd-content">
            <a class="login-button">Anmelden</a>
            <a class="register-button">Registrieren</a>
        </div>
    </div>
    <div class="nav-elements">
        <div class="nav-list"><a>Home</a></div>
        <div class="nav-list"><a>About</a></div>
        <div class="nav-list"><a>Contact</a></div>
    </div>
    
</div>