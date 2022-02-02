<?php /* Template Name: marketplace page*/ ?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/marketplace-style.css?'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/marketplace.js'?>"></script>
</head>

<body>

    <form action=""  method="post">
    </form>

    <?php 
        $request = wp_remote_get( 'http://localhost:8080/job-offer/getRandomJobOffers/1' . $_SESSION["companyId"], $arg );
        $body    = wp_remote_retrieve_body($request); 
        $jobList = json_decode($body, true);

        if ($jobList != null){
        foreach ($jobList as $job){
        echo '<div class="joboffer">
                <h3  class="joboffer-title">' . $job["title"] . '</h3>
                <p name="joboffer-category" class="joboffer-category">Kategory: ' . $job["category"] . '</p>
                <p class="joboffer-descr">Kurzbeschreibung: '. $job["descr"] .'</p>
                <p>Kennnummer: '. $job["jobOfferId"] .'</p>
               </div>';
            }
        }
        ?>
    </div>
</body>