<?php /* Template Name: createJobOffer */ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/createJobOffer-style.css?'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/createJobOffer.js'?>"></script>
</head>

<body>
    <form action="<?php echo home_url( '/' ) . "index.php/create-job-request" ; ?>" method="post" id="job-formular">
        <input id="job-title" name="job-title" placeholder="Berufsbezeichnung" ></input>
        <input id="job-descr" name="job-descr" placeholder="Berufsbeschreibung"></input>
        <input id="job-category" name="job-category" placeholder="Berufskategory"></input>
        <input id="job-condition" name="job-condition" placeholder="Berufsbedinung"></input>
        <input id="job-salary" name="job-salary" placeholder="Gehalt"></input>
        <button type="submit" id="create-job-offer">
            <h1> Jobangebot Erstellen! </h1>
        </button>
    </form>
</body>