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

    <title>OSJB - Profil</title>
</head>

<body>
    <?php
        $title = "OSJB";
        include "php/header.php";
    ?>
    
    <div class="container border">
        <section>
            <!--Annordung der Informationen/Inputs in ein passendes responsives Grid-Layout fehlt noch-->
            <form action="php/config-profil.php" method="post">
                <fieldset>
                    <legend class="center">Profil von xy:</legend>
                    <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="name" name="name" readonly>
                    <br><br>

                    <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="email" id="email" name="email">
                    <input type="button" value="Bearbeiten" class="btn btn-secondary">
                    <br><br>

                    <label for="password">Passwort:&nbsp;&nbsp;</label>
                    <input type="password" id="password" name="password">
                    <input type="button" value="Bearbeiten" class="btn btn-secondary">

                    <h4>Adresse: <input type="button" value="Bearbeiten" class="btn btn-secondary"></h4>
                    <label for="straße">Straße und Hausnummer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="straße" name="straße">
                    <br><br>

                    <label for="plz">PLZ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="number" id="plz" name="plz">
                    <br><br>

                    <label for="stadt">Stadt:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="stadt" name="stadt"><br><br>

                    <input type="button" value="Absenden" class="btn btn-primary"><br><br>

                </fieldset>
            </form><br>
        </section>

        <section>
            <h4 class="center">Meine Anzeigen</h4>

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

    <?php
        include "php/footer.php";
    ?>
</body>

</html>