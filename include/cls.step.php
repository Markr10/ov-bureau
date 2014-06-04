<?php

/**
 * @author  Reinier Gombert
 * @date    26-mei-2014
 */

/**
 * Adding steps to route
 *
 * Class for adding steps to a transit advice route
 *
 * @category   Class
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/cls.step.php
 * @since      File available since Release 0.1.0
 */
class Step
{

    /**
     * Declare fields
     */
    // Step Details
    private $distance;
    private $duration;
    private $instructions;
    private $travelMode; // WALKING or TRANSIT
    // Transit Details
    private $arrivalStop;
    private $arrivalTime;
    private $departureStop;
    private $departureTime;
    private $headSign;
    // Line Details
    private $lineAgency;
    private $lineName;
    // Vehicle Details
    private $vehicleName;
    private $vehicleIcon;

    /**
     * Constructor for Step-class
     */
    function Step($step)
    {
        $this->distance = $step["distance"];
        $this->duration = $step["duration"];
        $this->instructions = $step["html_instructions"];
        $this->travelMode = $step["travel_mode"];

        if ($this->travelMode === "TRANSIT")
        {
            $transitDetails = $step["transit_details"];

            $this->arrivalStop = $transitDetails["arrival_stop"]["name"];
            $this->arrivalTime = $transitDetails["arrival_time"]["text"];
            $this->departureStop = $transitDetails["departure_stop"]["name"];
            $this->departureTime = $transitDetails["departure_time"]["text"];
            $this->headSign = $transitDetails["headsign"];

            $lineDetails = $transitDetails["line"];

            $this->lineAgency = $lineDetails["agencies"][0]["name"];
            $this->lineName = (array_key_exists("name", $lineDetails) ? $lineDetails["name"] : (array_key_exists("short_name", $lineDetails) ? $lineDetails["short_name"] : ""));

            $vehicleDetails = $lineDetails["vehicle"];

            $this->vehicleIcon = $vehicleDetails["icon"];
            $this->vehicleName = $vehicleDetails["name"];
        }
    }

    /**
     * Method for printing the step
     */
    public function printStep()
    {
        if ($this->travelMode === "WALKING")
        {
            echo"
            <div class='step'>
                <div class='details'>
                    <img src='http://maps.gstatic.com/mapfiles/transit/iw/6/walk.png' alt='Lopen' title='Lopen' />
                    <div class='instructions'>" . $this->instructions . "</div>
                </div>
            </div>";
        }
        else
        {
            echo"
            <div class='step'>
                <div class='details'>
                    <img src='" . $this->getVehicleIcon() . "' alt='" . $this->getVehicleName() . "' title='" . $this->getVehicleName() . "' />
                    <div class='lineName'>" . $this->getLineName() . "</div>
                    <div class='richting'>(richting " . $this->getHeadSign() . ")</div>
                    <div class='lineAgency'>" . $this->getLineAgency() . "</div>
                </div>
                <div class='departure'>
                    <div class='departureTime'>" . $this->getDepartureTime() . "</div>
                    <div class='departureStop'>" . $this->getDepartureStop() . "</div>
                </div>
                <div class='arrival'>
                    <div class='arrivalTime'>" . $this->getArrivalTime() . "</div>
                    <div class='arrivalStop'>" . $this->getArrivalStop() . "</div>
                </div>
            </div>";
        }
        echo"<div style='clear: both;'></div>";
    }

    /**
     * Getters
     * 
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function getArrivalStop()
    {
        return $this->arrivalStop;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function getDepartureStop()
    {
        return $this->departureStop;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function getHeadSign()
    {
        return $this->headSign;
    }

    public function getLineAgency()
    {
        return $this->lineAgency;
    }

    public function getLineName()
    {
        return $this->lineName;
    }

    public function getVehicleName()
    {
        return $this->vehicleName;
    }

    public function getVehicleIcon()
    {
        return $this->vehicleIcon;
    }

    public function getTravelMode()
    {
        return $this->travelMode;
    }

}

?>
