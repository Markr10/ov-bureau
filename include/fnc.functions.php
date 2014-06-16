<?php

/**
 * @author  Reinier Gombert
 * @date    27-mei-2014
 */
/**
 * Necessary functions and Defines
 *
 * This script contains all functions and Global Variables to make coding easier
 *
 * @category   Functions
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/fnc.functions.php
 * @since      File available since Release 0.1.0
 */
define('ARROW', "&#10140;");
define('REQUEST_INTERVAL', 900); // interval in seconds = 15 minutes in this case
define('COOKIE_LIFETIME', 60 * 60 * 24 * 7 * 26); // Half jaar totdat cookie verloopt.

/**
 * Method for removing country names at the end of the string, making it easier to read.
 * 
 * @param string $string    The string to be replaced
 * @return string
 */
function removeCountrySuffix($string)
{
    $find = array("/, Nederland/");
    $replace = array("");
    $string = preg_replace($find, $replace, $string);

    return $string;
}

/**
 * Method for adding 30 minutes to the duration of a travel by regioTaxi
 * 
 * @param type $inputString     the average duration of a route to ride with transit
 * @return string               returns the duration of the route with regioTaxi and +30 minutes
 */
function formatDurationStringRegioTaxi($inputString)
{
    $aStringArray = explode(" ", $inputString);

    $dagen = 0;
    $uren = 0;
    $minuten = 0;

    // haal alle evt. dagen, uren en minuten uit de array
    if (in_array("dag", $aStringArray) || in_array("dagen", $aStringArray))
    {
        $dagen = $aStringArray[0];
        $uren = $aStringArray[2];
        $minuten = $aStringArray[4];
    }
    else if (in_array("uur", $aStringArray))
    {
        $uren = $aStringArray[0];
        $minuten = $aStringArray[2];
    }
    else
    {
        $minuten = $aStringArray[0];
    }

    // bereken totaal aantal minuten uit deze dagen, uren en minuten
    $totaalAantalMinuten = ($dagen * 24 * 60) + ($uren * 60) + $minuten;

    // ZEER BELANGRIJK!!!
    // 30 minuten extra wachttijd toevoegen aan de reistijd
    $totaalAantalMinuten += 30;

    // formateer weer terug naar het oude formaat
    $fDagen = floor($totaalAantalMinuten / 1440);
    $totaalAantalMinuten -= $fDagen * 1440;
    $fUren = floor($totaalAantalMinuten / 60);
    $fMinuten = $totaalAantalMinuten - floor($fUren * 60);

    $formattedString = ($fDagen > 0 ? $fDagen . " dag " . $fUren . " uur " . $fMinuten . " min" : ($fUren > 0 ? $fUren . " uur " . $fMinuten . " min" : $fMinuten . " min"));

    return $formattedString;
}

function get_driving_information($start, $finish)
{

    $url = 'http://maps.googleapis.com/maps/api/directions/json?origin=' . $start . '&destination=' . $finish . '&sensor=false';
    $data = file_get_contents($url);
    if ($data)
    {
        $decode = (array) json_decode($data, true);
        return array(floor($decode['routes'][0]['legs'][0]['duration']["value"] / 60), $decode['routes'][0]['legs'][0]['distance']["value"]);
    }
    else
    {
        throw new Exception('Could not resolve URL');
    }
}

?>
