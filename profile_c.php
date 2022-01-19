<?php /* Template Name: Company Profile */ ?>

<?php 
    if(session_status() == PHP_SESSION_NONE){
        header("Location: https://localhost/wordpress/wordpress/index.php");
    }
?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile_c-style.css'?>">
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
<<<<<<< HEAD
=======
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
>>>>>>> 0b7e086d24665df65abe0b2dec57a1a916b58d6b

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
                                <p class="joboffer-category">' . $job["category"] . '</p>
                                <p class="joboffer-descr">'. $job["descr"] .'</p>
                            </div>';
                        }

                        ?>
                    <div id="profile-save-button">
                    <a href= "http://localhost/wordpress/wordpress/index.php/create-job" style="color: #fff"> 
                        <div id="joboffer-button"><h2>Job erstellen!</h2></div>          
                    </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>