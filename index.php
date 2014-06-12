<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Mobiliteit Noord Groningen</title>

        <!-- Screen CSS -->
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
        <!-- lightbox CSS -->
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        
        <!--Stylesheets OV Bureau-->
                <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
                <link rel="stylesheet" type="text/css" href="css/ov-style.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <!-- JAVASCRIPT GOES HERE -->	
                <script src="lib/jquery.min.js"></script>


        
        
        <script src="lib/toegankelijkheid.js"></script>
        <script src="lib/jquery.clearsearch-1.0.3-patched.js"></script>
        <script src="lib/planner.js"></script>

        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="js/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>	

        <!--this file includes the aviaslider: -->
        <script type='text/javascript' src='js/jquery.aviaSlider.js'></script>

        <!--this file includes the activation call for the avia slider. You should edit here: -->
        <script type='text/javascript' src='js/custom.js'></script>

<!--        <script type="text/javsacript">
            //Set the cursor ASAP to "Wait"
            document.body.style.cursor='wait';

            //When the window has finished loading, set it back to default...
            window.onload=function(){document.body.style.cursor='default';}
        </script>-->
    </head>
    <body>
        <div id="container">
            <div id="menu" class="menuPlanNormal"> <img src="images/contrast.png" alt="Wijzig contrast"/>
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
            <div id="header">
                <ul class='aviaslider' id="fullwidth-fade-slider" style="width: 100%; height: 256px;">
                <li><img src="images/slides/1.jpg" alt="" /></a></li>
                <li><img src="images/slides/2.jpg" alt="A heading of your choice :: This is the image description defined in your alt tag" /></a></li>
                <li><img src="images/slides/3.jpg" alt="Another heading :: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor" /></a></li>
            </ul>
            </div>
            <div id="plan" class="menuPlanNormal">Plan uw reis!</div>
            <?php
            require_once './include/cls.transitadvice.php';
            require_once './include/cls.route.php';
            require_once './include/cls.step.php';
            require_once './include/fnc.functions.php';

            // Predefine request status
            $requestStatus = "NOT_FOUND";

            if (isset($_POST["submit"]))
            {
                // define POST values
                $how = $_POST["how"];
                $time = $_POST["time"];
                $startAddress = $_POST["startAddress"];
                $endAddress = $_POST["endAddress"];

                $advice = new TransitAdvice($startAddress, $endAddress, date("d-m-Y"), $time, $how);
                $advice->printAdvice();

                $requestStatus = $advice->getStatus();
                /*
                  //fetch data from API and decode received json
                  $unixTime = strtotime(date("d-m-Y H:i", strtotime(date("d-m-Y") . " " . $time)));
                  $content = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=" . urlencode($startAddress) . "&destination=" . urlencode($endAddress) . "&sensor=false&key=AIzaSyCKZlUXOE0zYan1v9SD1RNyVipP-ZZAABc&" . $how . "=$unixTime&mode=transit&alternatives=true&language=nl");
                  $result = (array) json_decode($content, true);

                  // print the received aray on screen for visualization-testing
                  echo"<pre>";
                  print_r($result);
                  echo"</pre>";
                 */
            }
            else if (isset($_GET["earlier"]) || isset($_GET["later"]))
            {
                // define GET values
                $how = $_GET["h"]; // "departure_time" or "arrival_time"
                $time = $_GET["t"]; // in Unix format, VERY IMPORTANT !!!
                $startAddress = $_GET["sa"];
                $endAddress = $_GET["ea"];
                $date = $_GET["d"]; // d-m-Y

                $advice = new TransitAdvice($startAddress, $endAddress, $date, date("H:i", $time), $how);

                $interval = REQUEST_INTERVAL; // interval in seconds = 15 minutes in this case
                if (isset($_GET["earlier"])) // they wanted to travel earlier
                {
                    $oldTime = $time;
                    while ($advice->getEarliestTime($how) >= $oldTime)
                    {
                        $time -= $interval;
                        $advice = new TransitAdvice($startAddress, $endAddress, $date, date("H:i", $time), $how);
                    }
                }
                else // they chose for later options!
                {
                    $oldTime = $time;
                    while ($advice->getEarliestTime($how) <= $oldTime)
                    {
                        $time += $interval;
                        $advice = new TransitAdvice($startAddress, $endAddress, $date, date("H:i", $time), $how);
                    }
                }

                // print the advice on the screen
                $advice->printAdvice();
                // request the status
                $requestStatus = $advice->getStatus();
            }
            

            if ($requestStatus !== "OK")
            {
                ?>
                <div id="content" class="textNormal">
                    <form id="planner" method="post" action="#plan">
                        <label for="startAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Van</label>
                        <input name="startAddress" id="from" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                        <label for="endAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Naar</label>
                        <input name="endAddress" id="to" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                        <div class="pickDateTime">
                            <div class="datePicker">
                                <label for="datepicker" title="Vul de gewenste datum in.">Datum</label>
                                <input type="text" id="datepicker" value="<?php echo date("d-m-Y") ?>" />
                            </div>
                            <div class="timePicker">
                                <label for="timepicker" title="Vul de gewenste tijd in.">Tijd</label>
                                <input type="text" id="timepicker" class="clearable" name="time" value="<?php echo date("H:i") ?>" />
                            </div>
                        </div>
                        <label for="depart" class="inlinelabel" title=""><input type="radio" name="how" value="departure_time" id="depart" checked /> Vertrektijd </label>
                        <label for="arrive" class="inlinelabel" title=""><input type="radio" name="how" value="arrival_time" id="arrive" /> Aankomsttijd </label>
                        <div style="clear: both;"></div>
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
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    showOn: "both", // show onclick calendar AND textfield
                    buttonImage: "images/calendar-icon.gif", // define image path to calendar
                    buttonImageOnly: true, // calendar image, no button
                    showButtonPanel: true, // show buttons for 'today' and 'done'
                    changeMonth: true, // month = changeable
                    changeYear: true, // year = changeable
                    dateFormat: 'dd-mm-yy', // date notation
                    showWeek: false, // show week numbers
                    buttonText: 'Open kalender',
                    // NEDERLANDS
                    closeText: 'Sluiten',
                    prevText: '←',
                    nextText: '→',
                    currentText: 'Vandaag',
                    monthNames: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                        'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
                    monthNamesShort: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                        'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
                    dayNames: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
                    dayNamesShort: ['zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat'],
                    dayNamesMin: ['zo', 'ma', 'di', 'wo', 'do', 'vr', 'za'],
                    weekHeader: 'Wk',
                    minDate: 'dateToday'
                });
            });
            $(document).ready(function()
            {
                $("img[class='ui-datepicker-trigger']").each(function()
                {
                    $(this).attr('style', 'height:20px; position:absolute; top:50px;right:20px;');
                });
            });
        </script>