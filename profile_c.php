<?php /* Template Name: Company Profile */ ?>

<?php 
    if(session_status() == PHP_SESSION_NONE){
        header("Location: https://localhost/wordpress/wordpress/index.php");
    }
?>

<head>
    <script src="<?php echo get_template_directory_uri() . '/js/profile_c.js'?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>

<header>
    <div class="header-container">
        <div class="header-image">
            <div id="logo-image"></div>
        </div>
    </div>
</header>

<div id="nav">
<div id="profile-nav" class="nav-window">
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
</div>
</div>

<body id="pp">
    <div id="data-wrapper">
        <div id="profile-container">
            <div id="company-logo">
                <div class="profile-headline">
                    <p>Logo</p>
                </div>
                <div class="company-profile-headline" style="margin-top: 10px;">
                    <p>Firmenlogo</p>
                </div>
                <div class="picture-container">
                    <div class="logo-picture">

                    </div>
                </div>
                <div class="picture-upload-container">
                    <input type="file" class="logo-upload" placeholder="Eigenes Logo hochladen">    
                </div>
            </div>

            <div id="profile-data">
                <div class="profile-headline">
                    <p>Daten</p>
                </div>
                <form action="<?php echo home_url( '/' ) . "index.php/update-company-profile" ; ?>" method="post" class="login-form">
                    <div class="sections">
                        <div class="input-icons01">
                            <input id="profile-company-companyName" placeholder="Firmenname" class="profile-company-input-form" name="companyName" value="<?php echo $_SESSION["companyName"] ?>" > </input>
                            <ion-icon class="icon" name="briefcase-outline"></ion-icon>
                        </div>
                        <div class="input-icons01">
                            <input id="profile-company-websiteUrl" placeholder="Webseite" class="profile-company-input-form" name="websiteUrl" value="<?php echo $_SESSION["websiteUrl"] ?>">  </input>
                            <ion-icon class="icon" name="person-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="sections">
                        <div class="input-icons02">
                            <input id="profile-company-email" placeholder="Email" class="profile-company-input-form" name="email" value="<?php echo $_SESSION["email"] ?>" > </input>
                            <ion-icon class="icon" name="mail-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="sections">
                        <div class="input-icons02">
                            <select id="profile-company-branche" class="profile-company-input-form" name="branche">
                                <option value=<?php echo $_SESSION["branche"] ?>> <?php
                                    if($_SESSION["branche"] == null ){
                                        echo "-- Branche auswählen --";
                                    }else{
                                        echo $_SESSION["branche"];
                                    }
                                ?></option>
                                <option value="Verwaltung | Büro | Administration">Verwaltung | Büro | Administration</option>
                                <option value="Kultur | Kunst | Unterhaltung">Kultur | Kunst | Unterhaltung</option>
                                <option value="Vereine">Vereine</option>
                                <option value="Automobilzulieferer | Automobil">Automobilzulieferer | Automobil</option>
                                <option value="Banken">Banken</option>
                                <option value="Chemie">Chemie</option>
                                <option value="Handel | Konsum">Handel | Konsum</option>
                                <option value="Baugewerbe | Architektur">Baugewerbe | Architektur</option>
                                <option value="Beratung | Consulting">Beratung | Consulting</option>
                                <option value="Bildung | Universität | Schulen | FH">Bildung | Universität | Schulen | FH</option>
                                <option value="Elektronik | Elektro">Elektronik | Elektro</option>
                                <option value="Energiewirtschaft">Energiewirtschaft</option>
                                <option value="Finanzen">Finanzen</option>
                                <option value="Nahrungmittel | Forstwirtschaft | Land">Nahrungmittel | Forstwirtschaft | Land</option>
                                <option value="Gesundheitswesen | Pflege | Soziales">Gesundheitswesen | Pflege | Soziales</option>
                                <option value="Personalbeschafung | Personalwesen">Personalbeschafung | Personalwesen</option>
                                <option value="Industrie">Industrie</option>
                                <option value="Versicherung">Versicherung</option>
                                <option value="Multimedia | Internet">Multimedia | Internet</option>
                                <option value="IT | EDV"> IT | EDV </option>
                                <option value="Rechtsberatung"> Rechtsberatung </option>
                                <option value="Werbung | Marketing | PR"> Werbung | Marketing | PR </option>
                                <option value="Marktforschung">Marktforschung</option>
                                <option value="Anlagenbau | Maschienen">Anlagenbau | Maschienen</option>
                                <option value="Medien">Medien</option>
                                <option value="Medizintechnik">Medizintechnik</option>
                                <option value="Medizin | Pharma">Medizin | Pharma</option>
                                <option value="Druck | Verpackung | Papier">Druck | Verpackung | Papier</option>
                                <option value="Öffentliche Verwaltung">Öffentliche Verwaltung</option>
                                <option value="Einkauf | Beschaffung">Einkauf | Beschaffung</option>
                                <option value="Immobilien">Immobilien</option>
                                <option value="Entwickung | Forschung | Wissenschaft">Entwickung | Forschung | Wissenschaft</option>
                                <option value="Dienstleistung">Dienstleistung</option>
                                <option value="Beaty | Fitness | Sport">Beaty | Fitness | Sport</option>
                                <option value="Wirtschaftsprüfung | Steuerberatung">Wirtschaftsprüfung | Steuerberatung</option>
                                <option value="Telekommunikation">Telekommunikation</option>
                                <option value="Textilbranche">Textilbranche</option>
                                <option value="Gastronomie | Tourismus | Hotel">Gastronomie | Tourismus | Hotel</option>
                                <option value="Messeanbieter | Seminar">Messeanbieter | Seminar</option>
                                <option value="Logistik | Verkehr | Transport">Marktforschung</option>
                            </select>
                        </div>
                    </div>  
                    <button id="profile-save-button" type="submit"><h2>Speichern</h2></button>
                </div>
                <div id="joboffers-container">
                    <div class="profile-headline">
                        <p> Berufsinserate </p>
                    </div>
                    
                    <div id="jobsoffers">
                        <!-- Auflistung der Jobs in divs -->
                        <?php 

                        $request = wp_remote_get( 'http://localhost:8080/job-offer/getByCompanyId/' . $_SESSION["companyId"], $arg );
                        $body    = wp_remote_retrieve_body($request); 
                        $jobList = json_decode($body, true);
                        
                        foreach ($jobList as $job){
                        echo '<div class="joboffer">
                                <h3 class="joboffer-title">' . $job["title"] . '</h3>
                                <p class="joboffer-category">Kategory: ' . $job["category"] . '</p>
                                <p class="joboffer-descr">'. $job["descr"] .'</p>
                            </div>';
                        }
                        ?>
                    <div id="profile-save-button">
                    <a href= "http://localhost/wordpress/wordpress/index.php/create-job" style="color: #fff; float: block;"> 
                        <div id="joboffer-button"><h2>Job erstellen!</h2></div>          
                    </a>
                    </div>
                </div>
            </form>
            <div class="profile-headline">
                <p> Addresse </p>
            </div>
            <form action="<?php echo home_url( '/' ) . "index.php/company-add-address-request" ; ?>" method="post" class="login-form">
                <input id="profile-streetname" placeholder="Straße" class="profile-input-form" name="company-street" value="<?php echo $_SESSION["street"] ?>"></input>
                <input id="profile-streetnumber" placeholder="Straßennummer" class="profile-input-form" name="company-streetNo" value="<?php echo $_SESSION["streetNo"] ?>"></input>
                <input id="profile-zipNo" placeholder="Postleitzahl" class="profile-input-form" name="company-zipNo" value="<?php echo $_SESSION["zipNo"] ?>"></input>
                <input id="profile-city" placeholder="Stadt" class="profile-input-form" name="company-city" value="<?php echo $_SESSION["city"] ?>"></input>
                <input id="profile-country" placeholder="Land" class="profile-input-form" name="company-country" value="<?php echo $_SESSION["country"] ?>"></input>
                <input id="profile-state" placeholder="Bundesland" class="profile-input-form" name="compnay-state" value="<?php echo $_SESSION["state"] ?>"></input>
                <button id="profile-add-address-button" type="submit"><h2> Speichern</h2></button>
            </form>
            <div class="profile-headline">
                <p> Kontaktperson </p>
            </div>
            <form action="<?php echo home_url( '/' ) . "index.php/company-add-contact-person-request" ; ?>" method="post" class="login-form">
                <input id="contactperson-title" placeholder="Anrede" class="profile-input-form" name="company-contactperson-title" value="<?php echo $_SESSION["contactperson-title"] ?>"></input>
                <input id="contactperson-firstname" placeholder="Vorname" class="profile-input-form" name="company-contactperson-firstName" value="<?php echo $_SESSION["contactperson-firstName"] ?>"></input>
                <input id="contactperson-lastname" placeholder="Nachname" class="profile-input-form" name="company-contactperson-lastName" value="<?php echo $_SESSION["contactperson-lastName"] ?>"></input>
                <input id="contactperson-email" placeholder="Email" class="profile-input-form" name="company-contactperson-email" value="<?php echo $_SESSION["contactperson-email"] ?>"></input>
                <input id="contactperson-telno" placeholder="Telefonnummer" class="profile-input-form" name="company-contactperson-telNo" value="<?php echo $_SESSION["contactperson-telNo"] ?>"></input>
                <button id="contact-add-contactperson-button" type="submit"><h2> Speichern</h2></button>
            </form>
        </div>
    </div>
</body>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile_c-style.css'?>">