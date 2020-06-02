<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="bilder/favicon-16x16.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>OSJB - Jobangebot anzeigen</title>
</head>

<body>
    <div class="container-fluid jumbotron">
        <header>
            <div class="row">
                <div class="col-1">
                    <nav>
                        <!--Link zurück zur letzten Seite (entweder Suchergebnisse oder eingeloggtes Profil später über javascript). So lange Übergansweise immer zu Suchergebnissen-->
                        <a href="suchergebnisse.html">
                            <img src="bilder/back_button.png" alt="Zurück" width="50" height="50">
                        </a>
                    </nav>
                </div>
                <div class="col-11">
                    <h1 class="center">Jobangebot</h1>
                </div>
            </div>
        </header>
    </div>

    <div class="container border">
        <div class="row">
            <section class="col-md-4 last_td center">
                <img class="img-fluid" src="bilder/logo.png" alt="Firmenlogo" width="232" height="232">
            </section>

            <section class="col-md-8 last_td">
                <h5>(Beschäftigungsart) - (Jobbezeichnung)</h5>
                <p>Zeitintensität: (Zeitintesität)</p>
                <p>Beginn: (Beginn)</p>
                <p>(Firma)</p>
                <p>(Hauptsitz oder Alternativer Standort)</p>
                <p>(Optional): Kontaktperson: Max Mustermann</p>
                <p>(Optional): E-Mailadresse: ABC@irgendwas.test</p>
            </section>
        </div>

        <section>
            <h4 class="center">Gesuchte Qualifikationen:</h4>
            <!--Es wird ggf. nur das angezeigt, was auch vorhanden ist?-->
            <div class="row">
                <div class="col-md-4">
                    <p>Liste der angegebenen Abschlüsse</p>
                    <ul>
                        <li>Merkmal1</li>
                        <li>Merkmal2</li>
                        <li>Merkmal3</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Liste der angegebenen Module</p>
                    <ul>
                        <li>Merkmal1</li>
                        <li>Merkmal2</li>
                        <li>Merkmal3</li>
                    </ul>
                </div>
                <div class="col-md-4 last_td">
                    <p>Liste der angegebenen Fähigkeiten</p>
                    <ul>
                        <li>Merkmal1</li>
                        <li>Merkmal2</li>
                        <li>Merkmal3</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h5>Weitere Beschreibung des Jobangebots: </h5> <!--(Falls vorhanden: Inhalt des Textfelds mit individueller Beschreibung)-->
            <p>(Text aus dem Textfeld)</p>
            <p><img src="dummy" alt="Bild mit individueller Beschreibung des Jobangebots" width="10" height="10"> <!--(Nur angezeigt falls vorhanden?)-->
        </section>

        <section class="end">
            <a href="dummy" class="btn btn-primary" role="button">Bewerben</a>
            <!--(Link zur Seite des Unternehmens (Falls Link angegeben wurde)-->
        </section>
    </div>

    <?php
        include "php/footer.php";
    ?>
</body>

</html>