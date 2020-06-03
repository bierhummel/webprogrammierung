<!doctype html>

<?php include('php/calc-job.php'); ?>

<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="bilder/favicon-16x16.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Queries.css">


    <title>OSJB - Profil</title>
</head>

<body>
    <div class="container-fluid jumbotron">
        <header>
            <div class="row">
                <div class="col-3">
                    <nav>
                        <!--Link zurück zur letzten Seite (außer login) (später über javascript). So lange Übergansweise immer zur Startseite-->
                        <a href="index.html">
                            <img src="bilder/back_button.png" alt="Zurück" width="50" height="50">
                        </a>
                    </nav>
                </div>
                <div class="col-8">
                    <h1 class="center">Profil</h1>
                </div>
            </div>
        </header>
    </div>
    <div class="container-fluid">
        <div class="container_for_profile border">
            <section>
                <!--Annordung der Informationen/Inputs in ein passendes responsives Grid-Layout fehlt noch-->
                <form action="/action_page.php">
                    <legend class="center">Profil von xy:</legend>
                    <div class="row form-group">
                        <div class="col">

                            <label for="name">Name:</label>
                        </div>
                        <div class="col-sm">

                            <input type="text" id="name" name="name" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm">


                            <label for="email">Email:</label>
                        </div>
                        <div class="col-sm">

                            <input type="email" id="email" name="email">
                        </div>
                    </div>

                    <!--   <div class="form-group">

                       <input type="button" value="Bearbeiten" class="btn btn-secondary"> 
                    </div> -->
                    <div class="row form-group">
                        <div class="col-sm">


            <p>
                <a href="jobangebot-anlegen.php" class="btn btn-primary">Anzeige erstellen</a>
            </p>

            <?php 
                $count = 0;
                foreach($jobs as $job): 
                    extract($job);
                    $count++;
            ?>
            
            <div class="border">
  
                <a href="jobangebot-anzeigen.php?id=<?php echo($id)?>"> <?php echo($bez)?></a>
                (Datum an dem Jobangebot erstellt wurde)
                (Jobangeobt aktiv/inaktiv)

                <a href="jobangebot-anlegen.php?id=<?php echo($id)?>" class="btn btn-secondary">Bearbeiten</a>

                <a href="profil.php?del=1&id=<?php echo($id)?>" class="btn btn-light">Löschen</a>

            </div>
            
            <?php endforeach; ?>
            
            <p class="center">Ende der Liste. Es wurden <?php echo $count ?> Jobangebote gefunden.</p>
            
            
            
    

        </section>
    </div>

                        <input type="button" value="Bearbeiten" class="btn btn-secondary">
                        <!--  <a href="jobanbebot_anlegen.html">Bearbeiten</a> -->
                        <!--(Lieber mit HTML-Link arbeiten und diesen wie Button aussehen lassen? oder Bild benutzen?)-->

                        <input type="button" value="Löschen" class="btn btn-light">
                        <!--   <a href="jobanbebot_anlegen.html">Löschen</a> -->
                        <!--(Lieber mit HTML-Link arbeiten und diesen wie Button aussehen lassen? oder Bild benutzen?)-->
                    </p>
                </section>
            </div>

        </div>


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
