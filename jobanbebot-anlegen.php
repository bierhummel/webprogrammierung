<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="bilder/favicon-16x16.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>OSJB - Jobangebot anlegen</title>
</head>

<body>
    <div class="container-fluid jumbotron">
        <header>
            <div class="row">
                <div class="col-1">
                    <nav>
                        <!--Link zurück zum aktuell eingeloggten Profil-->
                        <a href="profil.html">
                            <img src="bilder/back_button.png" alt="Zurück" width="50" height="50">
                        </a>
                    </nav>
                </div>
                <div class="col-10">
                    <h1 class="center">Jobanzeige erstellen</h1><br>
                </div>
                <div class="col-1">
                </div>
            </div>
        </header>
    </div>

    <div class="container border">
     
            <!--Annordung der Inputfelder in ein passendes responsives Grid-Layout fehlt noch-->

            <form action="jobangebot_anzeigen.html" method="post">
                <section>
                    <h3 class="center">Allgemeine Informationen </h3>
                    <h4>Informationen zum Job</h4>
                    </section>
        <section>
                    <div class="row">
                        <div class="col-md-6">
                            <select class= "form-control" name="fachrichtung" id="fields1" size="1" required>
                                <option value="" disabled selected>Beschäftigungsart</option>
                                <option value="fr1">Festanstellung</option>
                                <option value="fr2">Praktikum</option>
                                <option value="fr3">Aushilfe</option>
                                <option value="fr4">Werkstudent</option>
                                <option value="fr5">Volontarioat</option>
                                <option value="fr6">Minijob</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label title="Fügen Sie eine Jobbbezeichnung hinzu.">
                                <input id = "fields2" type="text" name="jbez" maxlength="50" value="" placeholder="Jobbezeichnung hinzufügen" required>
                            </label>    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <select class="form-control" name="fachrichtung" size="1" id= "fields1" required>
                                <option value="" disabled selected>Fachrichtung auswählen</option>
                                <option value="fr1">Bildungs- und Sozialwissenschaften</option>
                                <option value="fr2">Informatik, Wirtschafts- und Rechtswissenschaften</option>
                                <option value="fr3">Sprach- und Kulturwissenschaften</option>
                                <option value="fr4">Human- und Gesellschaftswissenschaften</option>
                                <option value="fr5">Mathematik und Naturwissenschaften</option>
                                <option value="fr6">Medizin und Gesundheitswissenschaften</option>
                            </select>
                        </div>
                            <div class=" col-md-6">
                                <label title="Geben Sie hier einen Link zu Ihrem firmeneigenen Bewerbungsportal ein">
                                <select class="form-control" name="fachrichtung" id= "fields3" required>
                                <option value="" disabled selected>Zeitintensität auswählen</option>
                                <option value="fr1">Vollzeit</option>
                                <option value="fr2">Teilzeit</option>
                                <option value="fr3">max. 20h/Woche</option>
                            </select>
                         </label>
                        </div>
                   

                        <div class="col-lg-6">
                            <label>
                                <!--später min=(heute)-->
                                Frühester Beginn der Beschäftigung:
                                <input type="date" name="jdate" value="" required>
                            </label>
                        </div>
                   
                    <div class="col-md-6">
                            <label title="Geben Sie hier einen Link zu Ihrem firmeneigenen Bewerbungsportal ein">
                               <input id= "fields2" type="text" placeholder= " Link zur direkten Bewerbung (optional)"name="blink" maxlength="50" value="">
                            </label>
                        </div>
             
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h6>Falls Arbeitstelle nicht der Hauptfirmensitz (optional): </h6>
                        </div>
                        <!--später vllt. erstmal ausgeblendet und erst nach klick eingeblendet?-->
                        <div class="col-md-3">
                            Adresse der Arbeitsstelle:  
                                </div>
                        
                        <div class="col-md-3">
                                <input id= "fields3" type="text" name="aadr" value="">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-3">
                                PLZ der Arbeitsstelle:
                        </div>
                        <div class="col-md-3">
                                <input id= "fields3" type="text" name="aplz" maxlength="5" value="">
                        </div>
                    </div>

                    <h4>Informationen zum Unternehmen</h4>

                    <div class="row">
                        <div class="col-md-6">
                            Firma: ABC GmbH
                        </div>
                        <div class="col-md-6">
                            Hauptsitz: ABC Straße 123, 55555 Ort
                        </div>
                    </div>

                    <div class="row">
                        <!--später nur angezeigt falls vorhanden?-->
                        <div class="col-md-6">
                            (Optional): Kontaktperson: Max Mustermann
                        </div>
                        <div class="col-md-6">
                            (Optional): E-Mailadresse: ABC@irgendwas.test
                        </div>
                    </div>
                    <!--(Werte später automatisch aus Profil des Arbeitgebers übertragen)-->
                <hr>

                <section>
                    <h3 class="center">Gesuchte Qualifikationen (optional)</h3>
                    <p>
                        Abschlüsse:
                        <!--(Lieber auch als datalist?)--><br>
                        <label>
                        <label>
                            <input type="checkbox" name="abachelor" value="bachelor"> Bachelor
                        </label>
                        <label>
                            <input type="checkbox" name="amaster" value="master"> Master
                        </label>
                        <label>
                            <input type="checkbox" name="ibachelor" value="ibachelor"> Im Bachelor immatrikuliert
                        </label>
                        <label>
                            <input type="checkbox" name="imaster" value="ibachelor"> Im Master immatrikuliert
                        </label>
                        <label>
                            <input type="checkbox" name="ausbildung" value="ausbildung"> Zus. berufliche Ausbildung
                        </label>
             

                    <!--Später ermöglichen, dass beliebig viele Module + Fähigkeiten angegeben werden.. js?-->
                    <p><label>
                            Module:<br>
                            <input class="form-control" list="module">
                            <datalist id="module">
                                <option value="Internettechnologien">
                                <option value="Rechnernetze 1">
                                <option value="Buchhaltung und Abschluss">
                            </datalist>
                        </label></p>
                    <!--Falls möglich eine Liste aller Module der Uni Oldenburg einbinden-->

                    <p><label>
                            Besondere Fähigkeiten und Kenntnisse:<br>
                            <input class="form-control" list="fähigkeiten">
                            <datalist id="fähigkeiten">
                                <option value="Progammierung Java">
                                <option value="Webprogrammierung">
                                <option value="Zehnfingerschreiben">
                            </datalist>
                        </label></p>
                </section>

                <section>
                    <h3 class="center">Individuelle Beschreibung (optional)</h3>
                    <p>
                        Bitte füllen Sie das Textfeld mit einer individuellen Beschreibung aus und/oder laden Sie ein entsprechendes Dokument hoch.
                              <div class="col-md-12">
                                <textarea id="subject" name="subject" placeholder="Beschreibung einfügen..." style="width:100%; height: 200px;"></textarea>
                            </div>

                        <label>
                            Bild hochladen:
                            <!-- mit js überprüfen! -->
                            <input id= "upload" class="btn btn-secondary" type="file" name="upload" accept = ".jpg,jpeg,.png">
                        </label>
                    </p>
                </section>

                <section>
                    <p>
                        <button class="btn btn-light" type="button">Vorschau</button> (Soll eine Vorschau anzeigen) <br><br>
                        <input type="submit" class="btn btn-primary" value="Jobanzeige erstellen"> (Danach Jobangebot anzeigen)
                    </p>
                </section>

    <footer>
        <hr>
        <nav>
            <p class="footer">
                <a href="impragb.html" class="btn btn-link">AGB - Impressum - Datenschutz</a> |
                <a href="about.html" class="btn btn-link">Über uns</a> |
                <a href="login.html" class="btn btn-link">(Anmelden / Abmelden?)</a>
            </p>
        </nav>
    </footer>
</body>

</html>