<?php
require_once 'include/fnc.functions.php';

$transitURL = "?uhoh";
$transitERROR = "";
$conditie = "";

/**
 * If the user clicked on the submit button to ask for a transit advice (from INDEX.PHP)
 */
if (isset($_POST["submit"]))
{
    // define POST values
    $how = (empty($_POST["how"]) ? "null" : $_POST["how"]);
    $date = (empty($_POST["date"]) ? "null" : $_POST["date"]);
    $time = (empty($_POST["time"]) ? "null" : $_POST["time"]);
    $startAddress = (empty($_POST["startAddress"]) ? "null" : $_POST["startAddress"]);
    $endAddress = (empty($_POST["endAddress"]) ? "null" : $_POST["endAddress"]);
    $transitURL = "?plan=new&h=" . $how . "&d=" . $date . "&t=" . $time . "&sa=" . $startAddress . "&ea=" . $endAddress;

    // if there are already cookies set, which means the user already 
    // answered the questions, proceed to transit advice
    if (isset($_COOKIE["hasAnsweredQuestions"]))
    {
        header("Location: index.php" . $transitURL);
    }
}
/**
 * If the user has filled in the questions, and asks for transit advice (from QUESTION.PHP)
 */
else if (isset($_POST['submit_question']))
{
    // fetch the URL set in the form
    $transitURL = $_POST["transitURL"];

    if (!isset($_POST["auto"])) // de vraag is niet beantwoord!
    {
        $transitERROR = "<div id='transitAdvice'>Er is iets niet goed gegaan. <br/>Controleer of u alles correct heeft ingevuld en probeer het opnieuw.</div>";
    }
    else
    {
        if ($_POST["auto"] == "ja")
        {

            if (!isset($_POST["wAuto"]) || empty($_POST["wAuto"])) // de vervolgvraag is niet beantwoord!
            {
                $transitERROR = "<div id='transitAdvice'>Er is iets niet goed gegaan. <br/>Controleer of u alles correct heeft ingevuld en probeer het opnieuw.</div>";
            }
        }
        else if ($_POST["auto"] == "nee")
        {

            if (!isset($_POST["gAuto"]) || empty($_POST["gAuto"])) // de vervolgvraag is niet beantwoord!
            {
                $transitERROR = "<div id='transitAdvice'>Er is iets niet goed gegaan. <br/>Controleer of u alles correct heeft ingevuld en probeer het opnieuw.</div>";
            }
        }
        else // $_POST["auto"] is LEEG!
        {
            $transitERROR = "<div id='transitAdvice'>Er is iets niet goed gegaan. <br/>Controleer of u alles correct heeft ingevuld en probeer het opnieuw.</div>";
        }

        // als er geen errorwaarde is geconstateerd, ga verder!
        if ($transitERROR === "")
        {
            $cookietime = time() + COOKIE_LIFETIME; // Half jaar totdat cookie verloopt.
            // cookies aanmaken/overschrijven
            if ($_POST['wAuto'] == 'wLopen') // WEL Auto, WEL Lopen
            {
                $conditie = "U heeft <strong>wel</strong> een auto en u kunt <strong>wel</strong> meer dan 800 meter lopen of fietsen";
                setcookie("kanLopen", "true", $cookietime, '/');
            }
            if ($_POST['wAuto'] == 'nLopen') // WEL Auto, NIET Lopen
            {
                $conditie = "U heeft <strong>wel</strong> een auto en u kunt <strong>niet</strong> meer dan 800 meter lopen of fietsen";
                setcookie("kanLopen", "false", $cookietime, '/');
            }
            if ($_POST['gAuto'] == 'wLopen') // NIET Auto, WEL Lopen
            {
                $conditie = "U heeft <strong>geen</strong> auto maar u kunt <strong>wel</strong> meer dan 800 meter lopen of fietsen";
                setcookie("kanLopen", "true", $cookietime, '/');
            }
            if ($_POST['gAuto'] == 'nLopen') // NIET Auto, NIET Lopen
            {
                $conditie = "U heeft <strong>geen</strong> auto en u kunt <strong>niet</strong> meer dan 800 meter lopen of fietsen";
                setcookie("kanLopen", "false", $cookietime, '/');
            }

            // set cookie for having answered all the questions
            setcookie("hasAnsweredQuestions", $conditie, $cookietime, '/');

            header("Location: index.php" . $transitURL);
        }
    }
}
/**
 * De gebruiker wil graag opnieuw de vragen beantwoorden
 */
else if (isset($_GET["edit"]))
{
    $how = (empty($_GET["h"]) ? "null" : $_GET["h"]);
    $date = (empty($_GET["d"]) ? "null" : $_GET["d"]);
    $time = (empty($_GET["t"]) ? "null" : $_GET["t"]);
    $startAddress = (empty($_GET["sa"]) ? "null" : $_GET["sa"]);
    $endAddress = (empty($_GET["ea"]) ? "null" : $_GET["ea"]);
    $transitURL = "?plan=new&h=" . $how . "&d=" . $date . "&t=" . $time . "&sa=" . $startAddress . "&ea=" . $endAddress;

    unset($_COOKIE["hasAnsweredQuestions"]);
    setcookie("hasAnsweredQuestions", "", time() - 3600, '/');
}
/**
 * Er is niets gevraagd aan deze pagina, de gebruiker mag hier dan niet komen
 * Stuur de gebruiker weer terug naar de homepagina
 */
else
{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
            <title>Mobiliteit Noord Groningen</title>
            <link rel="stylesheet" type="text/css" href="style.css" />
            <link rel="stylesheet" type="text/css" href="css/ov-style.css" />
            <link rel="stylesheet" type="text/css" href="css/form-planner.css" />
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
            <script src="lib/jquery.min.js"></script>
            <script src="lib/toegankelijkheid.js"></script>
            <script>
                $(document).ready(function()
                {
                    $("#geenAuto").css("visibility", "hidden");
                    $("#welAuto").css("visibility", "hidden");

                    $("input[name=auto]:radio").click(function()
                    {
                        console.log($(this).val());
                        if ($(this).val() === 'ja')
                        {
                            $("#geenAuto").css("visibility", "hidden");
                            $("#welAuto").css("visibility", "visible");
                        }
                        if ($(this).val() === 'nee')
                        {
                            $("#welAuto").css("visibility", "hidden");
                            $("#geenAuto").css("visibility", "visible");
                        }
                    });
                });
            </script>
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
            <div id="header"></div>
            <div id="plan" class="menuPlanNormal">Plan uw reis!</div>

            <?php echo $transitERROR; ?>

            <div id="question" class="textNormal">

                <form name="questionForm" method="POST" action="question.php">

                    <div id="autoKeuze">
                        <label>Ik heb een auto:</label>
                        <input type='radio' name='auto' value='ja' id="keuzeJa" /><label for="keuzeJa">Ja</label>
                        <input type='radio' name='auto' value='nee' id="keuzeNee" /><label for="keuzeNee">Nee</label>
                    </div>
                    
                    <div id="welAuto">
                        <input type='radio' name='wAuto' <?php echo (isset($_COOKIE["radio1"]) ? $_COOKIE["radio1"] : ""); ?> value='wLopen' id="wAutowLopen" /><label for="wAutowLopen">Ik ben in staat meer dan 800 meter te lopen of fietsen</label><br/>
                        <input type='radio' name='wAuto' <?php echo (isset($_COOKIE["radio2"]) ? $_COOKIE["radio2"] : ""); ?> value='nLopen' id="wAutonLopen" /><label for="wAutonLopen">Ik ben niet in staat te lopen of te fietsen</label>
                    </div>

                    <div id="geenAuto">
                        <input type='radio' name='gAuto' <?php echo (isset($_COOKIE["radio3"]) ? $_COOKIE["radio3"] : ""); ?> value='wLopen' id="gAutowLopen" /><label for="gAutowLopen">Ik ben in staat meer dan 800 meter te lopen of fietsen</label><br/>
                        <input type='radio' name='gAuto' <?php echo (isset($_COOKIE["radio4"]) ? $_COOKIE["radio4"] : ""); ?> value='nLopen' id="gAutonLopen" /><label for="gAutonLopen">Ik ben niet in staat te lopen of te fietsen</label>
                    </div>

                    <input type="hidden" name="transitURL" value="<?php echo $transitURL; ?>"/>

                    <input id="submit" name="submit_question" type="submit" value="Toon reisadvies"/>

                </form>

            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>