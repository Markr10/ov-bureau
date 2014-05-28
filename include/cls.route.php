<?php

/**
 * @author  Reinier Gombert
 * @date    26-mei-2014
 */

/**
 * Adding new routes
 *
 * Class for instanciate new routes for a transit advice
 *
 * @category   Class
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/cls.route.php
 * @since      File available since Release 0.1.0
 */

class Route
{
    /**
     * Declare fields
     */
    // Route Details
    private $departureTime;
    private $arrivalTime;
    private $distance;
    private $duration;
    private $startAddress;
    private $endAddress;
    private $unixDepartureTime;
    
    // Route Steps
    private $steps;
    
    // Route Overstappen
    private $overstappen; // nummer aantal overstappen
    
    /**
     * Constructor of this class. Sets the class fields from received Google Directions API data.
     * 
     * @param array $route  Gets raw array data from Google Api for one route
     */
    function Route($route)
    {
        // initialize steps
        $this->steps = array();
        
        // define class fields
        $this->departureTime = $route["legs"][0]["departure_time"]["text"];
        $this->arrivalTime = $route["legs"][0]["arrival_time"]["text"];
        $this->distance = $route["legs"][0]["distance"]["text"];
        $this->duration = $route["legs"][0]["duration"]["text"];
        $this->startAddress = removeCountrySuffix($route["legs"][0]["start_address"]);
        $this->endAddress = removeCountrySuffix($route["legs"][0]["end_address"]);
        
        $this->unixDepartureTime = $route["legs"][0]["departure_time"]["value"];
        
        // define steps
        $steps = $route["legs"][0]["steps"];
        
        // insert steps as objects for this route
        foreach($steps as $stepNr => $stepDetails)
        {
            $this->steps[$stepNr] = new Step($stepDetails);
        }
        
        // het is overstappen TUSSEN de steps, daarom -1
        $this->overstappen = count($this->steps) - 1;
    }
    
    /**
     * Method for printing the route
     */
    public function printRoute()
    {
        echo"<div class='route'>";
        echo"<div class='description'>Van " . $this->getStartAddress() . " naar " . $this->getEndAddress() . " </div>";
        echo"<div class='depart_arrive'>" . $this->getDepartureTime() . " &gt;&gt; " . $this->getArrivalTime() . "</div>";
        echo"<div class='distance'>Afstand: " . $this->getDistance() . "</div>";
        echo"<div class='duration'>Tijdsduur: " . $this->getDuration() . "</div>";
        echo"<div class='duration'>Aantal overstappen: " . $this->getAantalOverstappen() . "</div>";
        echo"</div>";
        
        foreach($this->steps as $step)
        {
            $step->printStep();
        }
    }
    
    /**
     * Getters
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }
    
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }
    
    public function getDistance()
    {
        return $this->distance;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function getStartAddress()
    {
        return $this->startAddress;
    }
    
    public function getEndAddress()
    {
        return $this->endAddress;
    }
    
    public function getUnixDepartureTime()
    {
        return $this->unixDepartureTime;
    }
    
    public function getAantalOverstappen()
    {
        return $this->overstappen;
    }
}
?>
