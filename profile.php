<?php /* Template Name: Profile Page */ ?>

<?php 
if(session_status() == PHP_SESSION_NONE){
    header("Location: https://localhost/wordpress/wordpress/index.php");
}
?>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/profile-style.css'?>">
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
    <div id="job-nav" class="nav-window">
        <div class="nav-title">
            <h2 class="nav-element">Jobs</h2>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Empfohlen</p>
        </div>
        <div class="nav-box-element">
            <p class="nav-element">Suche</p>
        </div>
        <div class="nav-box-element-last">
            <p class="nav-element">Gespeichert</p>
        </div>
    </div>
</div>

<body id="pp">
    <div id="data-wrapper">
            <div id="profile-container">
                  <div id="profile-picture">
                      <div class="profile-headline" style="margin-top: 10px;">
                        <p>Profilbild</p>
                      </div>
                      <div class="picture-container">
                        <div class="picture"></div>
                      </div>
                      <div id="pd" class="picture-upload-container">
                        <input type="file" class="picture-upload" placeholder="Eigenes Foto hochladen">    
                      </div>
                  </div>
                  <div id="profile-data">
                      <div class="profile-headline" style="width: 13vw; margin-top: 15px;">
                          <p>Persönliche Daten</p>
                      </div>
                      <form action="<?php echo home_url( '/' ) . "index.php/updateprofile" ; ?>" method="post" class="login-form">
                            <div class="sections">
                                <div class="input-icons01">
                                    <input id="profile-firstName" placeholder="Vorname" class="profile-input-form" name="firstName" value="<?php echo $_SESSION["firstName"] ?>" > </input>
                                    <ion-icon class="icon" name="person-outline"></ion-icon>
                                </div>
                                <div id="ji" class="input-icons01">
                                    <input id="profile-lastName" placeholder="Nachname" class="profile-input-form" name="lastName" value="<?php echo $_SESSION["lastName"] ?>">  </input>
                                    <ion-icon class="icon" name="person-outline"></ion-icon>
                                </div>
                            </div>  
                            <div class=profile-headline>
                                <p>Job Interessen</p>
                            </div>    
                            <div class="sections">
                                <div class="input-icons01">
                                    <input id="profile-hoursPerWeek" placeholder="Stunden/Woche" class="profile-input-form" name="hoursPerWeek" value="<?php echo $_SESSION["hoursPerWeek"] ?>"> </input>
                                    <ion-icon class="icon" name="time-outline"></ion-icon>
                                </div>
                                <div class="input-icons01">
                                    <input id="profile-preferableWork" placeholder="Bevorzugte Arbeit" class="profile-input-form" name="preferableWork" value="<?php echo $_SESSION["preferableWork"] ?>"></input>
                                    <ion-icon class="icon"name="briefcase-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="sections">
                                <div class="input-icons02">
                                    <input id="profile-interestDescr" placeholder="Interessen Beschreibung" class="profile-input-form" name="interestDescr" value="<?php echo $_SESSION["interestDescr"] ?>"> </input>
                                    <ion-icon class="icon" name="receipt-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="sections">
                                <div class="input-icons02">
                                    <input id="profile-skillDescr" placeholder="Skill Beschreibung" class="profile-input-form" name="skillDescr" value="<?php echo $_SESSION["skillDescr"] ?>"> </input>
                                    <ion-icon class="icon" name="accessibility-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="sections">
                                <div class="input-icons01">
                                    <select id="profile-jobBranch" class="profile-input-form" name="jobBranche">
                                        <option value=<?php echo $_SESSION["jobBranche"] ?>> <?php
                                            if($_SESSION["jobBranche"] == null ){
                                                echo "-- Branche auswählen --";
                                            }else{
                                                echo $_SESSION["jobBranche"];
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
                                <!--<input id="profile-jobField" name="jobField" value="<?php// echo $_SESSION["jobField"] ?>"> </input> -->
                                <div class="input-icons01">
                                    <select id="profile-jobField" class="profile-input-form" name="jobField">
                                        <option value=<?php echo $_SESSION["jobField"] ?>> 
                                        <?php 
                                            if($_SESSION["jobField"] == null){
                                                echo "-- JobFeld auswählen --";
                                            }else {
                                                echo $_SESSION["jobField"];
                                            }
                                        ?>    
                                        </option>
                                        <option value="Personalentwicklung">Personalentwicklung </option>
                                        <option value="Programmierung &verbar; IT &verbar; EDV">Programmierung | IT | EDV</option>
                                        <option value="Tourismus &verbar; Gastronomie">Tourismus | Gastronomie</option>
                                        <option value="Bildung &verbar; Coaching &verbar; Training">Bildung | Coaching | Training</option>
                                        <option value="Finanzen &verbar; Buchhaltung &verbar; Controlling">Finanzen | Buchhaltung | Controlling</option>
                                        <option value="Business Developement &verbar; Mentoring &verbar; Consulting">Business Developement | Mentoring | Consulting</option>
                                        <option value="Steuerberatung &verbar; Rechtsberatung">Steuerberatung | Rechtsberatung</option>
                                        <option value="Datenaufbereitung &verbar; Recherche &verbar; Forschung &verbar; Wissenschaft">Datenaufbereitung | Recherche | Forschung | Wissenschaft</option>
                                        <option value="Technick Ingenierunwese &verbar; Architektur &verbar; Technik">Technick Ingenierunwese | Architektur | Technik </option>
                                        <option value="Wellness &verbar; Sport &verbar; Gesundheit &verbar; Medizinische Berufe">Wellness | Sport | Gesundheit | Medizinische Berufe</option>
                                        <option value="Produktentwicklung &verbar; Interview">Produktentwicklung | Interview</option>
                                        <option value="Dolmetsch &verbar; Übersetzung">Dolmetschen | Übersetzung</option>
                                        <option value="Zustellung &verbar; Einkauf &verbar; Transport &verbar; Logistik">Zustellung | Einkauf | Transport | Logistik</option>
                                        <option value="Gewerbe &verbar; Produktion &verbar; Handwerk">Gewerbe | Produktion | Handwerk</option>
                                        <option value="Redaktion &verbar; Werbung &verbar; Marketing">Redaktion | Werbung | Marketing</option>
                                        <option value="Künstlerische Tätigkeit &verbar; Kreative Tätigkeit">Künstlerische Tätigkeit | Kreative Tätigkeit</option>
                                        <option value="Messe &verbar; Eventpersonal &verbar; Promotion">Messe | Eventpersonal | Promotion</option>
                                        <option value="Call Center &verbar; Verkauf &verbar; Außendienst &verbar; Kundenbetreuung">Call Center | Verkauf | Außendienst | Kundenbetreuung</option>
                                        <option value="Sachbearbeitung &verbar; Assistenz &verbar; Büro">Sachbearbeitung | Assistenz | Büro</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <input id="profile-jobBranch" name="jobBranche" value="<?php // echo $_SESSION["jobBranche"] ?>"></input> -->

                          <input id="profile-seniorId" name="seniorId" value="<?php echo $_SESSION["seniorId"] ?>"> </input>
                          <button id="profile-save-button" type="submit"><h2>Speichern</h2></button>
                      </form>
                    <div class="profile-headline">
                        <p> Addresse </p>
                    </div>
                    <form action="<?php echo home_url( '/' ) . "index.php/senior-add-address-request" ; ?>" method="post" class="login-form">
                        <input id="profile-streetname" placeholder="Straße" class="profile-input-form" name="senior-street" value="<?php echo $_SESSION["street"] ?>"></input>
                        <input id="profile-streetnumber" placeholder="Straßennummer" class="profile-input-form" name="senior-streetNo" value="<?php echo $_SESSION["streetNo"] ?>"></input>
                        <input id="profile-zipNo" placeholder="Postleitzahl" class="profile-input-form" name="senior-zipNo" value="<?php echo $_SESSION["zipNo"] ?>"></input>
                        <input id="profile-city" placeholder="Stadt" class="profile-input-form" name="senior-city" value="<?php echo $_SESSION["city"] ?>"></input>
                        <input id="profile-country" placeholder="Land" class="profile-input-form" name="senior-country" value="<?php echo $_SESSION["country"] ?>"></input>
                        <input id="profile-state" placeholder="Bundesland" class="profile-input-form" name="senior-state" value="<?php echo $_SESSION["state"] ?>"></input>
                        <button id="profile-add-address-button" type="submit"><h2> Speichern</h2></button>
                    </form>
                  </div> 
              </div>
              
              <div class="profile-subcontainer subcontainer2">
                  <div id="profile-description"></div>
                  <div id="profile-files">
                      <form action="<?php // echo home_url( '/' ) . "index.php/uploadFiles" ; ?>" method="POST" enctype="multipart/form-data">
                          <input type="file" id="upload_file_fields" name="uploadedFile" /> 
                          <input type="submit"/>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>


