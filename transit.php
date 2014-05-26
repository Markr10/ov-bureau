<?php
if (isset($_POST["submit"])) {
    $startAddress = $_POST["startAddress"];
    $endAddress = $_POST["endAddress"];
    if(isset($_POST["arrival"])) {
        $how = "departure_time";
       $time = $_POST["time"];
    } else {
        $how = "arrival_time";
        $time = $_POST["time"];
    }
    
    $content = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=$startAddress&destination=$endAddress&sensor=false&key=AIzaSyCKZlUXOE0zYan1v9SD1RNyVipP-ZZAABc&$how=1343641500&mode=transit&alternatives=true");

    echo "<pre>";
    print_r($content);
    echo "</pre>";
} else {
    ?>
    <form method="post" action="">
        <input type="text" name="startAddress" placeholder="Start"><br />
        <input type="text" name="endAddress" placeholder="Destiny"><br />
        Vertrek<input type="checkbox" name="departure" checked><br />
        Aankomst<input type="checkbox" name="arrival"><br />
        <input type="text" name="time" value="<?php echo date("H:i") ?>"><br />
        <button name="submit">Plan reis</button>
    </form>
    <?php
}
?>

