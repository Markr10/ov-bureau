<link href="/style.css" rel="stylesheet" type="text/css" />
<?php
require_once '/include/cls.transitadvice.php';
require_once '/include/cls.route.php';
require_once '/include/cls.step.php';
require_once '/include/fnc.functions.php';

if (isset($_POST["submit"])) 
{
    // define POST values
    $how = $_POST["how"];
    $time = $_POST["time"];
    $startAddress = $_POST["startAddress"];
    $endAddress = $_POST["endAddress"];

    $advice = new TransitAdvice($startAddress, $endAddress, date("d-m-Y"), $time, $how);
    $advice->printAdvice();
    
    // fetch data from API and decode received json
        $unixTime = strtotime(date("d-m-Y H:i", strtotime(date("d-m-Y") . " " . $time)));
        $content = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=" . $startAddress . "&destination=" . $endAddress . "&sensor=false&key=AIzaSyCKZlUXOE0zYan1v9SD1RNyVipP-ZZAABc&" . $how . "=$unixTime&mode=transit&alternatives=true&language=nl");
        $result = (array) json_decode($content, true);
        
        echo"<pre>";
        print_r($result);
        echo"</pre>";

} else {
    ?>
    <form method="post" action="">
        <input type="text" name="startAddress" placeholder="Start"><br />
        <input type="text" name="endAddress" placeholder="Destiny"><br />
        Vertrek<input type="radio" name="how" value="departure_time" checked><br />
        Aankomst<input type="radio" name="how" value="arrival_time"><br />
        <input type="text" name="time" value="<?php echo date("H:i") ?>"><br />
        <button name="submit">Plan reis</button>
    </form>
    <?php
}
?>

