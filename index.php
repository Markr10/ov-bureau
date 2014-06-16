<?php
/**
 * Include all classes and functions
 */
require_once './include/fnc.functions.php';
require_once './include/cls.transitadvice.php';
require_once './include/cls.route.php';
require_once './include/cls.step.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Mobiliteit Noord Groningen</title>
        <!-- Screen CSS -->
        <link rel="stylesheet" type="text/css" href="css/slider.css" media="screen" />
        <!-- Lightbox CSS -->
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        <!--Stylesheets OV Bureau-->
        <link rel="stylesheet" type="text/css" href="css/ov-style.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
        <!-- JavaScript -->	
        <script src="lib/jquery.min.js"></script>
        <script src="lib/toegankelijkheid.js"></script>
        <script src="lib/jquery.clearsearch-1.0.3-patched.js"></script>
        <script src="lib/planner.js"></script>
        <script src="lib/cookie/jquery.cookie.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="js/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

        <script>
            // Setup jQuery DatePicker
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

        <!--this file includes the aviaslider: -->
        <script type='text/javascript' src='js/jquery.aviaSlider.js'></script>

        <!--this file includes the activation call for the avia slider. You should edit here: -->
        <script type='text/javascript' src='js/custom.js'></script>

        <script type="text/javsacript">
            //Set the cursor ASAP to "Wait"
            document.body.style.cursor='wait';

            //When the window has finished loading, set it back to default...
            window.onload=function(){document.body.style.cursor='default';}
        </script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="lib/maps.js"></script>
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
            <?php
            if (isset($_GET["plan"]) || isset($_GET["later"]) || isset($_GET["earlier"]) || isset($_GET["edit"]))
            {
                
            }
            else
            {
                ?>
                <div id="header">
                    <ul class='aviaslider' id="fullwidth-fade-slider" style="width: 100%; height: 256px;">
                        <li><img src="images/slides/1.jpg" alt="" /></a></li>
                        <li><img src="images/slides/2.jpg" alt="A heading of your choice :: This is the image description defined in your alt tag" /></a></li>
                        <li><img src="images/slides/3.jpg" alt="Another heading :: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor" /></a></li>
                    </ul>
                </div>
                <div id="plan" class="menuPlanNormal">Plan uw reis!</div>


                <?php
            }
            // Predefine request status
            $requestStatus = "NOT_FOUND";

            if (isset($_GET["plan"]))
            {
                // define POST values
                $how = $_GET["h"];
                $time = $_GET["t"];
                $date = $_GET["d"];
                $startAddress = $_GET["sa"];
                $endAddress = $_GET["ea"];

                $advice = new TransitAdvice($startAddress, $endAddress, $date, $time, $how);
                $advice->printAdvice();
                ?>
                <script type="text/javascript">
                calcRoute();
                </script>
                <?php
                $requestStatus = $advice->getStatus();
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
                ?>
                <script type="text/javascript">
                calcRoute();
                </script>
                <?php
                // request the status
                $requestStatus = $advice->getStatus();
            }


            if ($requestStatus !== "OK")
            {
                if (isset($_GET["uhoh"]))
                {
                    echo"
                        <div id='transitAdvice'>
                            Er is iets mis gegaan, probeer het opnieuw.
                        </div>
                        ";
                }
                ?>
                <div id="content" class="textNormal">
                    <form id="planner" method="post" action="question.php">
                        <label for="startAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Van</label>
                        <input name="startAddress" id="from" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                        <label for="endAddress" title="Vul bijvoorbeeld een adres, station of postcode in.">Naar</label>
                        <input name="endAddress" id="to" class="clearable" type="text" placeholder="Adres, station, postcode, etc" autofocus />
                        <div class="pickDateTime">
                            <div class="datePicker">
                                <label for="datepicker" title="Vul de gewenste datum in.">Datum</label>
                                <input type="text" name="date" id="datepicker" value="<?php echo date("d-m-Y") ?>" autocomplete="off" />
                            </div>
                            <div class="timePicker">
                                <label for="timepicker" title="Vul de gewenste tijd in.">Tijd</label>
                                <input type="text" id="timepicker" class="clearable" name="time" autocomplete="off" maxlength="5" value="<?php echo date("H:i"); ?>" />
                            </div>
                        </div>
                        <label for="depart" class="inlinelabel" title=""><input type="radio" name="how" value="departure_time" id="depart" checked /> Vertrektijd </label>
                        <label for="arrive" class="inlinelabel" title=""><input type="radio" name="how" value="arrival_time" id="arrive" /> Aankomsttijd </label>
                        <div style="clear: both;"></div>
                        <input name="submit" type="submit" value="Plan mijn reis!" />
                    </form>
                </div>
                <?php
            }
            ?>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>
