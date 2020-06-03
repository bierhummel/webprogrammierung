<?php

ini_set("session.use_cookies", 1); 
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);

session_start();
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="bilder/favicon-16x16.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <title>OSJB - Login</title>
</head>

<body>


    <div class="container-fluid jumbotron">
        <header>
            <nav>
                <!--Link zurück zur letzten Seite (später über javascript). So lange Übergansweise immer zur Startseite-->
                <a href="index.html">
                    <img src="bilder/back_button.png" alt="Zurück" width="50" height="50">
                </a>
            </nav>
            <div class="col-sm-11">
                <h1 class="center">OSJB - Anmelden</h1>
            </div>
        </header>
    </div>

    <!--Später über Javascript vllt nur eins von beiden anzeigen lassen und über knopf Ansicht wechseln-->
    <div class="row">
        <div class="container col-xl-4 border ">

            <?php
            
            $emaildummy = "wael.hikal@uol.de";
                            $passdummy = "12345678";

            if(isset($_POST['log'])){
                
            $email = (isset($_POST["email"]) && is_string($_POST["email"]))
? $_POST["email"] : "";
            $passwort = (isset($_POST["passwort"]) && is_string($_POST["passwort"]))
? $_POST["passwort"] : "";
            $ckbox = (isset($_POST["ckbox"]) && is_string($_POST["ckbox"])) ? $_POST["ckbox"] : "";
                

        $ckbox = htmlspecialchars($ckbox);
            $email = htmlspecialchars($email);
            $passwort = htmlspecialchars($passwort);
                 if ($email == $emaildummy and $passwort == $passdummy){
                    if ( isset($_POST['ckbox'])){
                                    setcookie('email', $email, time()+60*60*7);
                                    setcookie('passwort', $passwort, time()+60*60*7);

                    }
                    session_start();
                    $_SESSION['email']= $email;
                                        header("location: index.php");
                    echo "Willkommen";

                    
                }else{ echo "email oder passwort ist  ungültig ";}
            }
            
           
            ?>
            <section>


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="was-validated">
                    <fieldset>
                        <legend>Log in:</legend>
                        <div class="row form-group">

                            <div class="col-sm">

                                <label for="email">Email:</label>
                            </div>
                            <div class="col-sm">

                                <input type="email" id="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Bitte ausfüllen </div>


                        <div class="row form-group">

                            <div class="col-sm">

                                <label for="passwort">Passwort:</label>
                            </div>

                            <div class="col-sm">

                                <input type="password" id="passwort" placeholder="Passwort" name="passwort" value="" required>

                            </div>
                        </div>

                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Bitte ausfüllen.</div>
                        <div class="form-check d-flex align-items-end flex-column">


                            <input type="checkbox" class="custom-control-input" id="customCheck" name="ckbox">
                            <label class="custom-control-label" for="customCheck">Angemeldet bleiben</label>
                        </div>
                        <div class="form-check  d-flex align-items-end flex-column ">

                            <input type="submit" class="btn btn-primary m-2 " name="log" value="Login">
                            <!-- <a href="profil.html">Login</a>-->
                        </div>
                        <div class="form-check d-flex align-items-end flex-column">

                            <!--(Submit soll auf entsprechende Profil weiterleiten.. js? Bis dahin auch als Link)--->

                            <input type="button" class="btn btn-light  " value="Passwort vergessen">
                        </div>
                    </fieldset>
                </form>
            </section>
        </div>

        <div class="container col-xl-4 border">

            <?php
            
                        if(isset($_POST['reg'])){

$name = (isset($_POST["name"]) && is_string($_POST["name"]))
? $_POST["name"] : "";
           
$email1 = (isset($_POST["email1"]) && is_string($_POST["email1"]))
? $_POST["email1"] : "";
            
$passwort1 = (isset($_POST["passwort1"]) && is_string($_POST["passwort1"]))
? $_POST["passwort1"] : "";
 $passwort2 = (isset($_POST["passwort2"]) && is_string($_POST["passwort2"]))
? $_POST["passwort2"] : "";

$unv = (isset($_POST["unv"]) && 
       is_string($_POST["unv"])) ? $_POST["unv"] : "";
   
$name = htmlspecialchars($name);
$email1 = htmlspecialchars($email1);
            $passwort1 = htmlspecialchars($passwort1);
            $passwort2 = htmlspecialchars($passwort2);
        $unv = htmlspecialchars($unv);
            if ($_POST['passwort1']!= $_POST['passwort2'])
 {
     echo("Passwort nicht übereinstimmen! Versuchen Sie es erneut. ");
 }
                             $namedummy = "wael";
                                  $emaildummy = "wael.hikal@uol.de";
                            if ($email1 == $emaildummy and $name == $namedummy){
                                
                                     echo("Name oder Email ist bereits vorhanden ");

                            }

                        }
?>

            <section>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="was-validated">
                    <fieldset>
                        <legend>Registrierung:</legend>
                        <div class="row form-group">
                            <div class="col-sm">
                                <label for="name">Name:</label>
                            </div>
                            <div class="col-sm">
                                <input type="text" id="name" placeholder="Name" name="name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col">


                                <label for="r_email">Email:</label>
                            </div>
                            <div class="col-sm">

                                <input type="email" id="r_email" placeholder="Email" name="email1" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm">
                                <label for="r_passwort">Passwort:</label>
                            </div>
                            <div class="col-sm">

                                <input type="password" id="r_passwort" placeholder="Passwort" name="passwort1" minlength="8" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm">


                                <label for="r_passwort2">Passwort bestätigen:</label>
                            </div>
                            <div class="col-sm">

                                <input type="password" id="r_passwort2" placeholder="Passwort" name="passwort2" minlength="8" required>
                            </div>
                        </div>
                        <div class="d-flex align-items-end flex-column">
                            <p><label>
                                    <select name="unv" size="1" required>
                                        <option value="">Unternehemensverzeichnis</option>
                                        <option value="test">test</option>
                                        <option value="test2">test2</option>
                                    </select>
                                </label></p>

                        </div>
                        <div class="form-group d-flex align-items-end flex-column">


                            <input type="submit" class="btn btn-primary" name="reg" value="Registrieren">
                            <!--<a href="profil.html">Registrieren</a> -->
                            <!--(Submit soll auf neues Profil weiterleiten.. js? Bis dahin auch als Link)-->
                        </div>
                    </fieldset>
                </form>

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
