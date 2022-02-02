<?php /* Template Name: createJobOffer */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/updateJobOffer-style.css?'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/createJobOffer.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>

<body>
    <h1 class="headline">JOBANGEBOT ERSTELLEN</h1>
    <div id="wrapper">
        <form action="<?php echo home_url( '/' ) . "index.php/create-job-request" ; ?>" method="post" id="job-formular">
            <div class="sections">
                <div class="input-icons">
                    <input id="job-title" class="profile-input-form" name="job-title" placeholder="Berufsbezeichnung" ></input>
                    <ion-icon class="icon" name="person-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons">
                    <input id="job-category" class="profile-input-form" name="job-category" placeholder="Berufskategorie"></input>
                    <ion-icon class="icon" name="copy-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons">
                    <input id="job-salary" class="profile-input-form" name="job-salary" placeholder="Gehalt"></input>
                    <ion-icon class="icon" name="cash-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons">
                    <textarea id="job-descr" class="profile-input-form" name="job-descr" placeholder="Berufsbeschreibung"></textarea>
                    <ion-icon class="icon" name="menu-outline"></ion-icon>
                </div>
            </div>
            <div class="sections">
                <div class="input-icons">
                    <textarea id="job-condition" class="profile-input-form" name="job-condition" placeholder="Berufsbedingung"></textarea>
                    <ion-icon class="icon" name="menu-outline"></ion-icon>
                </div>
            </div>
            <button type="submit" id="create-job-offer" class="profile-save-button">
                <h2>Erstellen</h2>
            </button>
        </form>
    </div>
</body>