<?php /* Template Name: update job offer */ ?>

<?php echo json_encode($_POST) ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/updateJobOffer-style.css?'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/updateJobOffer.js'?>"></script>
</head>

<body>
    <form action="<?php echo home_url( '/' ) . "index.php/update-job-offer-request" ; ?>" method="post" id="job-formular">
        <input id="joboffer-title" name="joboffer-title" placeholder="Berufsbezeichnung" value="<?php echo $_POST["joboffer-title"] ?>" ></input>
        <input id="joboffer-descr" name="joboffer-descr" placeholder="Berufsbeschreibung" value="<?php echo $_POST["joboffer-descr"] ?>"></input>
        <input id="joboffer-category" name="joboffer-category" placeholder="Berufskategory" value="<?php echo $_POST["joboffer-category"] ?>"></input>
        <input id="joboffer-condition" name="joboffer-condition" placeholder="Berufsbedinung" value="<?php echo $_POST["joboffer-condition"] ?>" ></input>
        <input id="joboffer-salary" name="joboffer-salary" placeholder="Gehalt" value="<?php echo $_POST["joboffer-salary"] ?>" ></input>
        <input hidden id="joboffer-id" name="joboffer-id"  value="<?php echo $_POST["joboffer-id"] ?>" ></input>
        <button type="submit" id="update-job-offer">
            <h1> Jobangebot Ändern </h1>
        </button>
    </form>
</body>
