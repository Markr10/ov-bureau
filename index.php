<?php

            require_once '/include/cls.transitadvice.php';
            require_once '/include/cls.route.php';
            require_once '/include/fnc.functions.php';
            require_once '/include/cls.step.php';

            ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/ov-style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <script src="lib/jquery.min.js"></script>
        <script src="lib/toegankelijkheid.js"></script>
        <script src="lib/jquery.clearsearch-1.0.3-patched.js"></script>
        <script src="lib/planner.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="menu" class="menuPlanNormal"> <img src="images/contrast.png" alt="Wijzig contrast"/>
                <div id="textSize">
                    <a href="#" class="fontSizePlus">A+</a> | <a href="#" class="fontSizeMinus">A-</a>
                </div>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
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
            <?php

            if (isset($_POST["submit"])) {
                // define POST values
                $how = $_POST["how"];
                $time = $_POST["time"];
                $startAddress = $_POST["startAddress"];
                $endAddress = $_POST["endAddress"];

                $advice = new TransitAdvice($startAddress, $endAddress, date("d-m-Y"), $time, $how);
                $advice->printAdvice();
            } else {
                ?>

                <div id="content" class="textNormal">
                    <form id="planner" method="post">
                        <label for="startAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Van</label>
                        <input name="startAddress" id="from" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                        <label for="endAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Naar</label>
                        <input name="endAddress" id="to" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                                                 <label for="how" title="">Vertrek/Aankomst</label>
       <input type="radio" name="how" value="departure_time" checked>
       <input type="radio" name="how" value="arrival_time">
        <input type="text" class="clearable" name="time" value="<?php echo date("H:i") ?>">
                        <input name="submit" type="submit" value="Plannen" />
                    </form>
                </div>
    <?php
}
?>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>