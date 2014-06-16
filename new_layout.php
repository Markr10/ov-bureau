<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery/custom/toegankelijkheid.js"></script>
        <script type="text/javascript" src="js/jquery/jquery.clearsearch-1.0.3-patched.js"></script>
        <script type="text/javascript" src="js/jquery/custom/planner.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="menu" class="menuPlanNormal"> <img src="images/contrastwit.png" alt="Wijzig contrast"/>
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
            <div id="header"></div>
            <div id="plan" class="menuPlanNormal">Plan uw reis!</div>
            <div id="content" class="textNormal">
                <form id="planner" method="post" action="planner.php">
                    <label for="from" title="Vul bijvoorbeeld een adres, station, postcode in.">Van</label>
                    <input name="from" id="from" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                    <label for="to" title="Vul bijvoorbeeld een adres, station, postcode in.">Naar</label>
                    <input name="to" id="to" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                    <input name="submit" type="submit" value="Plannen" />
                </form>
            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>
