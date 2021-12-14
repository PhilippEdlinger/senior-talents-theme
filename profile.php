<?php /* Template Name: Profile Page */ ?>

<?php 
if(session_status() == PHP_SESSION_NONE){
    header("Location: https://localhost/wordpress/wordpress/index.php");
}

?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css'?>">
</head>

<header>
    <div class="header-container">
        <div class="header-image">
            <div id="logo-image"></div>
        </div>
    </div>
</header>

<div id="nav"></div>

<body>
    <div id="data-wrapper">
        <div id="profile-container">
              <div class="profile-subcontainer">
                  <div id="profile-picture"></div>
                  <div id="profile-data">
                      <form action="<?php echo home_url( '/' ) . "index.php/updateprofile" ; ?>" method="post" class="login-form">
                          <input id="profile-firstName" name="firstName" value="<?php echo $_SESSION["firstName"] ?>" > </input>
                          <input id="profile-lastName" name="lastName" value="<?php echo $_SESSION["lastName"] ?>">  </input>
                          <input id="profile-hoursPerWeek" name="hoursPerWeek" value="<?php echo $_SESSION["hoursPerWeek"] ?>"> </input>
                          <input id="profile-interestDescr" name="interestDescr" value="<?php echo $_SESSION["interestDescr"] ?>"> </input>
                          <!-- <input id="profile-jobBranch" name="jobBranche" value="<?php // echo $_SESSION["jobBranche"] ?>"></input> -->
                          <select id="profile-jobBranch"  name="jobBranche">
                                <option value=<?php echo $_SESSION["jobBranch"] ?>> <?php
                                    if($_SESSION["jobBranch"] == null ){
                                        echo "-- Branche auswählen --";
                                    }else{
                                        echo $_SESSION["jobBranch"];
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
                          <!--<input id="profile-jobField" name="jobField" value="<?php// echo $_SESSION["jobField"] ?>"> </input> -->
                          <select id="profile-jobField"  name="jobField">
                                <option value=<?php echo $_SESSION["jobField"] ?>> 
                                <?php 
                                    if($_SESSION["jobField"] == null){
                                        echo "-- JobFeld auswählen --";
                                    }else {
                                        echo $_SESSION["jobField"];
                                    }
                                ?>    
                                </option>
                          
                                <option value="Personalentwicklung">Personalentwicklung</option>
                                <option value="Programmierung | IT | EDV">Programmierung | IT | EDV</option>
                                <option value="Tourismus | Gastronomie">Tourismus | Gastronomie</option>
                                <option value="Bildung | Coaching | Training">Bildung | Coaching | Training</option>
                                <option value="Finanzen | Buchhaltung | Controlling">Finanzen | Buchhaltung | Controlling</option>
                                <option value="Business Developement | Mentoring | Consulting">Business Developement | Mentoring | Consulting</option>
                                <option value="Steuerberatung | Rechtsberatung">Steuerberatung | Rechtsberatung</option>
                                <option value="Datenaufbereitung | Recherche | Forschung | Wissenschaft">Datenaufbereitung | Recherche | Forschung | Wissenschaft</option>
                                <option value="Technick Ingenierunwese | Architektur | Technik">Technick Ingenierunwese | Architektur | Technik </option>
                                <option value="Wellness | Sport | Gesundheit | Medizinische Berufe">Wellness | Sport | Gesundheit | Medizinische Berufe</option>
                                <option value="Produktentwicklung | Interview">Produktentwicklung | Interview</option>
                                <option value="Dolmetsch | Übersetzung">Dolmetschen | Übersetzung</option>
                                <option value="Zustellung | Einkauf | Transport | Logistik">Zustellung | Einkauf | Transport | Logistik</option>
                                <option value="Gewerbe | Produktion | Handwerk">Gewerbe | Produktion | Handwerk</option>
                                <option value="Redaktion | Werbung | Marketing">Redaktion | Werbung | Marketing</option>
                                <option value="Künstlerische- | Kreative Tätigkeit">Künstlerische- | Kreative Tätigkeit</option>
                                <option value="Messe- | Eventpersonal | Promotion">Messe- | Eventpersonal | Promotion</option>
                                <option value="Call Center | Verkauf | Außendienst | Kundenbetreuung">Call Center | Verkauf | Außendienst | Kundenbetreuung</option>
                                <option value="Sachbearbeitung | Assistenz | Büro">Sachbearbeitung | Assistenz | Büro</option>
                          </select>
                          <input id="profile-preferableWork" name="preferableWork" value="<?php echo $_SESSION["preferableWork"] ?>"></input>
                          <input id="profile-seniorId" name="seniorId" value="<?php echo $_SESSION["seniorId"] ?>"> </input>
                          <input id="profile-skillDescr" name="skillDescr" value="<?php echo $_SESSION["skillDescr"] ?>"> </input>
                          <button id="profile-save-button" type="submit">Speichern</button>
                      </form> 
                  </div> 
              </div>
              <div class="profile-subcontainer subcontainer2">
                  <div id="profile-description"></div>
                  <div id="profile-files">
                      <form action="<?php echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
                          <input type="file" id="upload_file_fields" name="uploadedFile" /> 
                          <input type="submit"/>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>

