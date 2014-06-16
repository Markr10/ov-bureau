<?php
// session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="css/ov-style.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
        <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery/ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.clearsearch-1.0.3-patched.js"></script>
        <script type="text/javascript" src="js/jquery/custom/toegankelijkheid.js"></script>
        <script type="text/javascript" src="js/jquery/custom/planner.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="menu" class="menuPlanNormal"> <img src="images/contrastwit.png"  alt="Wijzig contrast"/>
                <div id="textSize">
                    <a href="#" class="fontSizePlus">A+</a> | <a href="#" class="fontSizeMinus">A-</a>
                </div>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="waarom-ov.html">Waarom OV</a>
                    </li>
                    <li>
                        <a href="contact.php" >Contact</a>
                    </li>
                </ul>
            </div>
            <div id="slogan" class="footerSloganNormal">Reis met het openbaar vervoer!</div>
            <div id="contact" class="textNormal">
	            <?php
					if(isset($_POST['submit']))
					{
						echo "<p style='text-align :center; font-weight: bold; margin-top: 30px; font-size: large;'> Bedankt voor het versturen van het formulier.</p>";
					//     $aanhef = '';
					//     if($_POST['title'] == 'De heer')
					//     { 
					//         $aanhef = 'De heer';
					//     }
					//     if($_POST['title'] == 'Mevrouw')
					//     { 
					//         $aanhef = 'Mevrouw';
					//     }

					//     $initialen = mysqli_real_escape_string($_POST['initialen']); //required
					//     $tussenVoegsel = mysqli_real_escape_string($_POST['tussenVoegsel']);
					//     $achternaam = mysqli_real_escape_string($_POST['achternaam']); //required
					//     $postcode = mysqli_real_escape_string($_POST['postcode']); //required
					//     $huisnummer = mysqli_real_escape_string($_POST['huisnummer']); //required
					//     $huisnummerToevoeging = mysqli_real_escape_string($_POST['huisnummerToevoeging']);
					//     $straat = mysqli_real_escape_string($_POST['straat']); //required
					//     $woonplaats = mysqli_real_escape_string($_POST['woonplaats']); //required
					//     $landcode = mysqli_real_escape_string($_POST['landcode']);
					//     $telefoonnummer = mysqli_real_escape_string($_POST['telefoonnummer']);
					//     $mobielnummer = mysqli_real_escape_string($_POST['mobielnummer']);
					//     $mail = mysqli_real_escape_string($_POST['mail']); //required

					//     switch($_POST['formType'])
					//     {
					//     	case 'selected':
					// 	    	break;
					//     	case 'complaint': 
					// 	    	$complaintCategory = mysqli_real_escape_string($_POST['complaintCategory']); //required
					// 		    $datum = mysqli_real_escape_string($_POST['datum']); //required
					// 		    $incidentTijd0 = mysqli_real_escape_string($_POST['incidentTijd[0]']); //required
					// 		    $incidentTijd1 = mysqli_real_escape_string($_POST['incidentTijd[1]']); //required
					// 		    $klachtBeschrijving = mysqli_real_escape_string($_POST['klachtBeschrijving']); //required
					// 		    $instaphalte = mysqli_real_escape_string($_POST['instaphalte']);
					// 		    $bestemming = mysqli_real_escape_string($_POST['bestemming']);
					// 		    $lijnnummer = mysqli_real_escape_string($_POST['lijnnummer']);
					// 		    if(empty($initialen) || empty($achternaam) || empty($postcode) || empty($huisnummer) || empty($straat) || empty($woonplaats) || empty($mail) || 
					//         		empty($complaintCategory) || empty($datum) || empty($incidentTijd0) || empty($incidentTijd1) || empty($klachtBeschrijving))
					// 		    {
					// 				echo "required";
					// 		    }
					// 		    break;
					// 		case 'reaction':
					// 			$reactieCategorie = mysqli_real_escape_string($_POST['reactieCategorie']); //required
					// 			$datum = mysqli_real_escape_string($_POST['datum']); //required
					// 			$incidentTijd0 = mysqli_real_escape_string($_POST['incidentTijd[0]']); //required
					// 			$incidentTijd1 = mysqli_real_escape_string($_POST['incidentTijd[1]']); //required
					// 			$reactieBeschrijving = mysqli_real_escape_string($_POST['reactieBeschrijving']); //required
					// 			$instaphalte = mysqli_real_escape_string($_POST['instaphalte']);
					// 			$bestemming = mysqli_real_escape_string($_POST['bestemming']);
					// 			$lijnnummer = mysqli_real_escape_string($_POST['lijnnummer']);
					// 			if(empty($initialen) || empty($achternaam) || empty($postcode) || empty($huisnummer) || empty($straat) || empty($woonplaats) || empty($mail) || 
					//         		empty($reactieCategorie) || empty($datum) || empty($incidentTijd0) || empty($incidentTijd1) || empty($reactieBeschrijving))
					// 		    {
					// 		        echo "required";   
					// 		    }
					// 		break;
					// 		case 'groupTransport':
					// 			$organisatie = mysqli_real_escape_string($_POST['organisatie']); //required
					// 			$contactPersoon = mysqli_real_escape_string($_POST['contactPersoon']);
					// 			$datum = mysqli_real_escape_string($_POST['datum']); //required
					// 			$vertrektijd0 = mysqli_real_escape_string($_POST['vertrektijd[0]']); //required
					// 			$vertrektijd1 = mysqli_real_escape_string($_POST['vertrektijd[1]']); //required
					// 			$vertrektijdTerug0 = mysqli_real_escape_string($_POST['vertrektijdTerug[0]']); //required
					// 			$vertrektijdTerug1 = mysqli_real_escape_string($_POST['vertrektijdTerug[1]']); //required
					// 			$reactieBeschrijving = mysqli_real_escape_string($_POST['reactieBeschrijving']); //required
					// 			$aantalVolwassenen = mysqli_real_escape_string($_POST['aantalVolwassenen']); //required
					// 			$aantalKinderen = mysqli_real_escape_string($_POST['aantalKinderen']); //required
					// 			$aantalTieners = mysqli_real_escape_string($_POST['aantalTieners']); //required
					// 			$aantalSenioren = mysqli_real_escape_string($_POST['aantalSenioren']); //required
					// 			$groepBeschrijving = mysqli_real_escape_string($_POST['groepBeschrijving']);
					// 			if(empty($initialen) || empty($achternaam) || empty($postcode) || empty($huisnummer) || empty($straat) || empty($woonplaats) || empty($mail) || 
					//         		empty($organisatie) || empty($datum) || empty($vertrektijd0) || empty($vertrektijd1) || empty($vertrektijdTerug0) || 
					//         		empty($vertrektijdTerug1) || empty($reactieBeschrijving) || empty($aantalVolwassenen) || empty($aantalKinderen) || empty($aantalTieners) || 
					//         		empty($aantalSenioren))
					// 		    {
					// 		        echo "required";   
					// 		    }
					// 		break;
					// 		case 'lostAndFound':
					// 			$objectKind = mysqli_real_escape_string($_POST['objectKind']); //required
					// 			$omschrijving = mysqli_real_escape_string($_POST['omschrijving']); //required
					// 			$datum = mysqli_real_escape_string($_POST['datum']); //required
					// 			$lijnnummer = mysqli_real_escape_string($_POST['lijnnummer']); //required
					// 			$instapHalte = mysqli_real_escape_string($_POST['instapHalte']); //required
					// 			$uitstaphalte = mysqli_real_escape_string($_POST['uitstaphalte']); //required
					// 			$tijd0 = mysqli_real_escape_string($_POST['tijd[0]']); //required
					// 			$tijd1 = mysqli_real_escape_string($_POST['tijd[1]']); //required
					// 			if(empty($initialen) || empty($achternaam) || empty($postcode) || empty($huisnummer) || empty($straat) || empty($woonplaats) || empty($mail) || 
					//         		empty($objectKind) || empty($omschrijving) || empty($lijnnummer) || empty($instapHalte) || empty($uitstaphalte) || empty($tijd0) || 
					//         		empty($tijd1))
					// 		    {
					// 		        echo "required";   
					// 		    }
					// 		break;
					//     }
					}
					else 
					{
				?>
                <h2>Contact formulieren</h2>
                <form id="contactFormulier" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <select name="formType" id="formType" required>
                        <option value <?php echo "test" ?> selected="selected"> Maak uw keuze...</option>
                        <option value="complaint"> Klacht</option>
                        <option value="reaction"> Reactie</option>
                        <option value="groupTransport"> Groepsvervoer</option>
                        <option value="lostAndFound"> Verloren voorwerpen</option>
                    </select>

                    <script type="text/javascript" >
                        $('#formType').change(function(event) {
                            $('#contactContent').load('contact/' + $(this).val() + '.php');
                        }); 
                    </script>

                    <div id="contactContent"></div>

                    <input id="submit" name="submit" type="submit" value="Dien in"/>

                </form>
                <?php
                	 }
                ?>
            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>
