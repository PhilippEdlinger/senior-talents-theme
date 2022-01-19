<?php /* Template Name: Company Profile */ ?>

<?php 
    if(session_status() == PHP_SESSION_NONE){
        header("Location: https://localhost/wordpress/wordpress/index.php");
    }
?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile_c-style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/js/profile_c.js'?>"></script>
</head>

<div id="profile-nav" class="nav-window">
        <!--
        <div  class="nav-title">
            <h2 class="nav-element">Profile</h2>
        </div>
        <a href="#pp">
        <div class="nav-box-element">
            <p class="nav-element">Daten</p>
        </div>
        </a>
        <a href="#pd">
        <div class="nav-box-element">
            <p class="nav-element">Über Mich</p>
        </div>
        </a>
        <a href="#ji">
        <div class="nav-box-element">
            <p class="nav-element">Job Interessen</p>
        </div>
        </a>
        -->
 </div>

<body>
<div id="company-logo">
    <div class="company-profile-headline" style="margin-top: 10px;">
        <p>Firmenlogo</p>
    </div>
    <div class="logo-container">
        <div class="logo-picture">

        </div>
        </div>
    <div class="logo-upload-container">
        <input type="file" class="logo-upload" placeholder="Eigenes Logo hochladen">    
    </div>
</div>
    <form action="<?php echo home_url( '/' ) . "index.php/update-company-profile" ; ?>" method="post" class="login-form">
        <div class="sections">
            <div class="input-iconsXX">
                <input id="profile-company-companyName" placeholder="Firmenname" class="profile-company-input-form" name="companyName" value="<?php echo $_SESSION["companyName"] ?>" > </input>
                <ion-icon class="icon" name="XX-outline"></ion-icon>
            </div>
            <div class="input-iconsXX">
                <input id="profile-company-websiteUrl" placeholder="Webseite" class="profile-company-input-form" name="websiteUrl" value="<?php echo $_SESSION["websiteUrl"] ?>">  </input>
                <ion-icon class="icon" name="person-outline"></ion-icon>
            </div>
        </div>
        <div class="sections">
            <div class="input-iconsXX">
                <input id="profile-company-email" placeholder="Email" class="profile-company-input-form" name="email" value="<?php echo $_SESSION["email"] ?>" > </input>
                <ion-icon class="icon" name="XX-outline"></ion-icon>
            </div>
        </div>
        <div class="sections">
            <div class="input-iconsXX">
                <select id="profile-company-branche" class="profile-company-input-form" name="branche">
                    <option value=<?php echo $_SESSION["branche"] ?>> <?php
                        if($_SESSION["branche"] == null ){
                            echo "-- Branche auswählen --";
                        }else{
                            echo $_SESSION["branche"];
                        }
                    ?></option>
                    <option value="Verwaltung &verbar; Büro &verbar; Administration">Verwaltung | Büro | Administration</option>
                    <option value="Kultur &verbar; Kunst &verbar; Unterhaltung">Kultur | Kunst | Unterhaltung</option>
                    <option value="Vereine">Vereine</option>
                    <option value="Automobilzulieferer &verbar; Automobil">Automobilzulieferer | Automobil</option>
                    <option value="Banken">Banken</option>
                    <option value="Chemie">Chemie</option>
                    <option value="Handel &verbar; Konsum">Handel | Konsum</option>
                    <option value="Baugewerbe &verbar; Architektur">Baugewerbe | Architektur</option>
                    <option value="Beratung &verbar; Consulting">Beratung | Consulting</option>
                    <option value="Bildung &verbar; Universität &verbar; Schulen &verbar; FH">Bildung | Universität | Schulen | FH</option>
                    <option value="Elektronik &verbar; Elektro">Elektronik | Elektro</option>
                    <option value="Energiewirtschaft">Energiewirtschaft</option>
                    <option value="Finanzen">Finanzen</option>
                    <option value="Nahrungmittel &verbar; Forstwirtschaft &verbar; Land">Nahrungmittel | Forstwirtschaft | Land</option>
                    <option value="Gesundheitswesen &verbar; Pflege &verbar; Soziales">Gesundheitswesen | Pflege | Soziales</option>
                    <option value="Personalbeschafung &verbar; Personalwesen">Personalbeschafung | Personalwesen</option>
                    <option value="Industrie">Industrie</option>
                    <option value="Versicherung">Versicherung</option>
                    <option value="Multimedia &verbar; Internet">Multimedia | Internet</option>
                    <option value="IT &verbar; EDV"> IT | EDV </option>
                    <option value="Rechtsberatung"> Rechtsberatung </option>
                    <option value="Werbung &verbar; Marketing &verbar; PR"> Werbung | Marketing | PR </option>
                    <option value="Marktforschung">Marktforschung</option>
                    <option value="Anlagenbau &verbar; Maschienen">Anlagenbau | Maschienen</option>
                    <option value="Medien">Medien</option>
                    <option value="Medizintechnik">Medizintechnik</option>
                    <option value="Medizin &verbar; Pharma">Medizin | Pharma</option>
                    <option value="Druck &verbar; Verpackung &verbar; Papier">Druck | Verpackung | Papier</option>
                    <option value="Öffentliche Verwaltung">Öffentliche Verwaltung</option>
                    <option value="Einkauf &verbar; Beschaffung">Einkauf | Beschaffung</option>
                    <option value="Immobilien">Immobilien</option>
                    <option value="Entwickung &verbar; Forschung &verbar; Wissenschaft">Entwickung | Forschung | Wissenschaft</option>
                    <option value="Dienstleistung">Dienstleistung</option>
                    <option value="Beaty &verbar; Fitness &verbar; Sport">Beaty | Fitness | Sport</option>
                    <option value="Wirtschaftsprüfung &verbar; Steuerberatung">Wirtschaftsprüfung | Steuerberatung</option>
                    <option value="Telekommunikation">Telekommunikation</option>
                    <option value="Textilbranche">Textilbranche</option>
                    <option value="Gastronomie &verbar; Tourismus &verbar; Hotel">Gastronomie | Tourismus | Hotel</option>
                    <option value="Messeanbieter &verbar; Seminar">Messeanbieter | Seminar</option>
                    <option value="Logistik &verbar; Verkehr &verbar; Transport">Marktforschung</option>
                </select>
            </div>
        </div>  
        <button id="profile-company-save-button" type="submit"><h2>Speichern</h2></button>

        <div id="joboffers-container">
            <h1> Berufsinserate </h1>
            <div id="jobsoffers">
                <!-- Auflistung der Jobs in divs -->
                <?php 

                                 
                $request = wp_remote_get( 'http://localhost:8080/job-offer/getByCompanyId/' . $_SESSION["companyId"], $arg );
                $body    = wp_remote_retrieve_body($request); 
                $jobList = json_decode($body, true);
                
                foreach ($jobList as $job){
                echo '<div class="joboffer">
                        <h3 class="joboffer-title">' . $job["title"] . '</h3>
                        <p class="joboffer-category">' . $job["category"] . '</p>
                        <p class="joboffer-descr">'. $job["descr"] .'</p>
                    </div>';
                }

                ?>
            <div>
            <a href= "http://localhost/wordpress/wordpress/index.php/create-job"> 
                <div id="joboffer-button"> Job erstellen! </div>          
            </a>
        </div>
    </form>
</body>