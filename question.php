<?php
// verstuurt nieuwe cookies + pas de nieuwe instellingen toe
if(isset($_POST['submit']))
{
    $time = time() + 60*60*24*7*26; // Half jaar totdat cookie verloopt.
    if($_POST['wAuto'] == 'wLopen')
    { 
        setcookie("A", 1, $time);
        setcookie("B", 0, $time);
        $radio1 = 'checked';
    }
    if($_POST['wAuto'] == 'nLopen')
    { 
        setcookie("A", 0, $time);
        setcookie("B", 1, $time);
        $radio2 = 'checked';
    }
    if($_POST['gAuto'] == 'wLopen')
    { 
        setcookie("C", 1, $time);
        setcookie("D", 0, $time);
        $radio3 = 'checked';
    }
    if($_POST['gAuto'] == 'nLopen')
    { 
        setcookie("C", 0, $time);
        setcookie("D", 1, $time);
        $radio4 = 'checked';
    }
}
else // gebruik meegezonden/ "oude" cookies
{
    if(isset($_COOKIE["A"]) && $_COOKIE["A"]) 
    {
        $radio1 = 'checked';
    } 
    if(isset($_COOKIE["B"]) && $_COOKIE["B"]) 
    {
        $radio2 = 'checked';
    }
    if(isset($_COOKIE["C"]) && $_COOKIE["C"]) 
    {
        $radio3 = 'checked';
    } 
    if(isset($_COOKIE["D"]) && $_COOKIE["D"]) 
    {
        $radio4 = 'checked';
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="lib/jquery.min.js"></script>
        <script src="lib/toegankelijkheid.js"></script>
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
            <div id="question" class="textNormal">
                <form method="POST" action="question.php">
 
                    <label>Ik heb een auto</label><br>
                    <Input type = 'Radio' Name ='wAuto' <?php echo $radio1; ?> value= 'wLopen'>en in staat meer dan 800 meter te lopen of fietsen</input><br>
                    <Input type = 'Radio' Name ='wAuto' <?php echo $radio2; ?> value= 'nLopen'>ben niet in staat te lopen of te fietsen</input><br><br>



                    <label>Ik heb geen auto</label><br>
                    <Input type = 'Radio' Name ='gAuto' <?php echo $radio3; ?> value= 'wLopen'>en in staat meer dan 800 meter te lopen of fietsen</input><br>
                    <Input type = 'Radio' Name ='gAuto' <?php echo $radio4; ?> value= 'nLopen'>ben niet in staat te lopen of te fietsen</input><br>

                    <input id="submit" name="submit" type="submit" value="Submit"/>

                    

                </form>
            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>