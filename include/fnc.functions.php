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

define('ARROW',"&#10140;");

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
?>
