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
        <button id="profile-company-save-button" type="submit"><h2>Speichern</h2></button>
    </form>
</body>