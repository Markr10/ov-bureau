<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>Mobiliteit Noord Groningen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="lib/jquery.min.js"></script>
        <script src="lib/toegankelijkheid.js"></script>
        <script src="lib/jquery.clearsearch-1.0.3-patched.js"></script>
        <script src="lib/planner.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="menu" class="menuPlanNormal"> <img src="images/contrast.png"  alt="Wijzig contrast"/>
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
            <div id="contact" class="textNormal">
                <form id="contactFormulier" method="post" action="bedankt.php">

                    <label>Name</label>
                    <input name="name" id="name" class="clearable" type="text" placeholder="Type Here" autofocus />

                    <label>Email</label>
                    <input name="email" id="email" class="clearable" type="text" placeholder="Type Here" autofocus />

                    <label>Message</label>
                    <textarea name="message" placeholder="Type Here"></textarea>

                    <input id="submit" name="submit" type="submit" value="Submit"/>

                </form>
            </div>
            <div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
        </div>
    </body>
</html>
