<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
        <script src="lib/jquery.min.js"></script>
        <script src="lib/toegankelijkheid.js"></script>
        <script src="lib/jquery.clearsearch-1.0.3-patched.js"></script>
        <script src="lib/planner.js"></script>
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
                <h2>Contact formulieren</h2>
                <form id="contactFormulier" method="post" action="bedankt.php">

                    <select name="formType" id="formType" required>
                        <option value selected="selected"> Maak uw keuze...</option>
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
            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>
