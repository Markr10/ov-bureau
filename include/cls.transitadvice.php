<?php

/**
 * @author  Reinier Gombert
 * @date    26-mei-2014
 */

/**
 * Display transit advice using Google Directions API
 *
 * Class for putting google directions into readable arrays 
 * and display them onto screen.
 *
 * @category   Class
 * @copyright  Copyright (c) 2014-2015 INF2D
 * @version    0.1
 * @link       http://ovbureau.serverict.nl/include/cls.transitadvice.php
 * @since      File available since Release 0.1.0
 */
class TransitAdvice
{

    /**
     * Declare fields
     */
    // Transit Advice Details
    private $from;
    private $to;
    private $date;
    private $time;
    private $how;
    private $status;
    // Transit Routes
    private $routes;    // array of possible routes (each with their own `route`-class)
    // Last Route (Departing Time)
    private $lastUnixTime;  // last given unixTime for transit advice route

    /**
     * Class constructor sets the class fields
     */

    function TransitAdvice($from, $to, $date, $time, $how)
    {
        $this->routes = array();
        $this->setFrom(ucfirst($from));
        $this->setTo(ucfirst($to));
        $this->setDate($date);
        $this->setTime($time);
        $this->setHow($how);

        $this->addRoutes();
    }

    /**
     * Method for adding routes
     * (creates new instances of class `route`)
     */
    public function addRoutes()
    {
        // fetch data from API and decode received json
        $unixTime = strtotime(date("d-m-Y H:i", strtotime($this->getDate() . " " . $this->getTime())));
        $content = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=" . urlencode($this->getFrom()) . "&destination=" . urlencode($this->getTo()) . "&sensor=false&key=AIzaSyCKZlUXOE0zYan1v9SD1RNyVipP-ZZAABc&" . $this->getHow() . "=$unixTime&mode=transit&alternatives=true&language=nl");
        $result = (array) json_decode($content, true);

        // define routes
        $routes = $result["routes"];

        $this->setStatus($result["status"]);

        if ($this->getStatus() === "OK")
        {
            foreach ($routes as $routeNr => $routeDetails)
            {
                // add a new route to the array
                $this->routes[$routeNr] = new Route($routeDetails);
            }
        }
    }

    public function getEarliestTime($time = "departure_time")
    {
        $routeNr = $this->printRoutes("firstKey");
        if ($time === "departure_time")
        {
            $timeToReturn = $this->routes[$routeNr]->getUnixDepartureTime();
            return $timeToReturn;
        }
        else if ($time === "arrival_time")
        {
            $timeToReturn = $this->routes[$routeNr]->getUnixArrivalTime();
            return $timeToReturn;
        }
        else
        {
            return null;
        }
    }

    public function getLatestTime($time = "departure_time")
    {
        $routeNr = $this->printRoutes("lastKey");
        if ($time === "departure_time")
        {
            $timeToReturn = $this->routes[$routeNr]->getUnixDepartureTime();
            return $timeToReturn;
        }
        else if ($time === "arrival_time")
        {
            $timeToReturn = $this->routes[$routeNr]->getUnixArrivalTime();
            return $timeToReturn;
        }
        else
        {
            return null;
        }
    }

    /**
     * Prints the transit advice on the screen within div's for css styling
     */
    public function printAdvice()
    {
        if ($this->getStatus() === "OK")
        {
            echo"<div id='transitAdvice'>";
            echo"";
            echo"<div id='from-to'>
                    " . $this->routes[$this->printRoutes("firstKey")]->getStartAddress() . " " . ARROW . " " . $this->routes[$this->printRoutes("firstKey")]->getEndAddress() . ".
                 </div>
                 <input type=\"hidden\" id=\"routeStart\" value='" . urlencode($this->routes[$this->printRoutes("firstKey")]->getStartAddress()) . "' />
                 <input type=\"hidden\" id=\"routeEnd\" value='" . urlencode($this->routes[$this->printRoutes("firstKey")]->getEndAddress()) . "'/>                 
                 <div id='onDate'>
                    Op " . $this->getDate() . " om " . $this->getTime() . "
                 </div>
                 <div id='questionLink'>" . $_COOKIE["hasAnsweredQuestions"] . "<br/><a href='question.php?edit=1&t=" . $this->routes[$this->printRoutes("firstKey")]->getDepartureTime() . "&sa=" . urlencode($this->getFrom()) . "&ea=" . urlencode($this->getTo()) . "&d=" . urlencode($this->getDate()) . "&h=" . urlencode($this->getHow()) . "'>" . ARROW . " Wijzig uw gegevens</a></div>
                 <div id='next-travel' data-nr='" . $this->printRoutes("firstKey") . "'>
                    Volgende reis: " . $this->routes[$this->printRoutes("firstKey")]->getDepartureTime() . "
                 </div>
                 <div id='backLink'><a href='" . $_SERVER["PHP_SELF"] . "' title='Plan opnieuw een reis'><span class='mirror'>" . ARROW . "</span>Plan opnieuw</a></div>
                 <div id='routeHeader'></div>";
            echo"<div id='routeDetails'>";
            /*
             * IMPLEMENTEER ALTERNATIEVE ROUTES
             * 
             * Hier kun je een alternatieve route toevoegen door simpelweg het volgende stukje code 
             * te kopiëren en te plakken onder de rest van de regels:
             * 
             * $this->implementeerVervoersMiddel("naam_van_vervoermiddel", "routeDetails_of_route?");
             * 
             * Hierbij moeten twee parameters(gescheiden door een comma) tussen de haakjes meegezonden worden.
             * Bij "naam_van_vervoermiddel" kun je een geheel eigen naam bedenken, deze wordt doorgevoerd 
             * en ook als kopje gebruikt.(Bijv: "Leerlingenvervoer") De tweede parameter zegt iets over of het een 
             * blokje links is of een complete beschijving van de route. Kies voor "routeDetails" als slechts 
             * enkele details op het scherm te zien moeten zijn in een klein blokje aan de linkerkant van het 
             * scherm. Kies voor "route" als je een beschrijving van de route in het rechtergedeelte van de 
             * website wilt waarbij ook een Google Maps routeplanner wordt weergegeven.
             * 
             * Het script maakt hieronder een check op de vragen die vooraf gesteld worden, die gaan over
             * of de persoon kan lopen of niet.
             * Plaats de regel tussen deze if{} - statement als je wilt dat deze pas BOVENAAN komt te
             * staan indien de persoon slecht ter been is en dus alternatief vervoer nodig heeft.
             * 
             * Er is ruimte vrijgelaten voor het toevoegen van een nieuwe regel.
             */
            if (isset($_COOKIE["kanLopen"]) && $_COOKIE["kanLopen"] == "false")
            {
                $this->implementeerVervoersMiddel("Regiotaxi", "routeDetails");
                // plaats onder deze regel een alternatief vervoersmiddel die slechts bovenaan staat als de persoon slecht ter been is
                
            }
            // plaats onder deze regel een alternatief vervoersmiddel die altijd bovenaan staat

            echo"<div id='routeDetailsHeader'>Openbaar Vervoer</div>";
            echo"<div id='earlier_travel_options' onClick=\"window.location.href='" . $_SERVER["PHP_SELF"] . "?earlier=true&t=" . strtotime($this->routes[$this->printRoutes("firstKey")]->getDepartureTime()) . "&sa=" . urlencode($this->getFrom()) . "&ea=" . urlencode($this->getTo()) . "&d=" . urlencode($this->getDate()) . "&h=" . urlencode($this->getHow()) . "'; document.body.style.cursor='wait'; return true;\">Eerdere reisopties<span class='arrow_top'>" . ARROW . "</span></div>";
            $this->printRoutes();
            echo"<div id='map_canvas'></div>";
            echo"</div>";
            echo"</div>";
        }
        else
        {
            echo"<div id='transitAdvice'>
                    Er is geen reisadvies voor deze route beschikbaar. <br />
                    Controleer of alle velden juist zijn ingevuld, of probeer het later nogmaals.
                </div>";
        }
    }

    /**
     * Method for printing all routes on screen
     * 
     * @param string $return    whether to return the first key of the array
     * @return int              returns the first key of the array
     */
    public function printRoutes($return = "null")
    {
        $routesToOutput = array();
        foreach ($this->routes as $routeNr => $route)
        {
            $unixTime = $route->getUnixDepartureTime();

            $routesToOutput[$routeNr] = $unixTime;
        }
        // sort the array by ascending departureTime
        asort($routesToOutput);

        if ($return === "null")
        {
            // loop through the sorted array and fetch each key corresponding to the class field `routes`
            foreach ($routesToOutput as $routeNr => $unixDepartureTime)
            {
                $route = $this->routes[$routeNr];
                $route->printRouteDetails($routeNr);
            }
            echo"<div id='later_travel_options' onClick=\"window.location.href='" . $_SERVER["PHP_SELF"] . "?later=true&t=" . $unixDepartureTime . "&sa=" . urlencode($this->getFrom()) . "&ea=" . urlencode($this->getTo()) . "&d=" . urlencode($this->getDate()) . "&h=" . urlencode($this->getHow()) . "'; document.body.style.cursor='wait'; return true;\">Latere reisopties<span class='arrow_bottom'>" . ARROW . "</span></div>";
            /*
             * IMPLEMENTEER ALTERNATIEVE ROUTES
             * 
             * Hier kun je een alternatieve route toevoegen door simpelweg het volgende stukje code 
             * te kopiëren en te plakken onder de rest van de regels:
             * 
             * $this->implementeerVervoersMiddel("naam_van_vervoermiddel", "routeDetails_of_route?");
             * 
             * Hierbij moeten twee parameters(gescheiden door een comma) tussen de haakjes meegezonden worden.
             * Bij "naam_van_vervoermiddel" kun je een geheel eigen naam bedenken, deze wordt doorgevoerd 
             * en ook als kopje gebruikt.(Bijv: "Leerlingenvervoer") De tweede parameter zegt iets over of het een 
             * blokje links is of een complete beschijving van de route. Kies voor "routeDetails" als slechts 
             * enkele details op het scherm te zien moeten zijn in een klein blokje aan de linkerkant van het 
             * scherm. Kies voor "route" als je een beschrijving van de route in het rechtergedeelte van de 
             * website wilt waarbij ook een Google Maps routeplanner wordt weergegeven.
             * 
             * Het script maakt hieronder een check op de vragen die vooraf gesteld worden, die gaan over
             * of de persoon kan lopen of niet.
             * Plaats de regel tussen deze if{} - statement als je wilt dat deze pas ONDERAAN komt te
             * staan indien de persoon goed kan lopen en dus GEEN alternatief vervoer nodig heeft.
             * 
             * Er is ruimte vrijgelaten voor het toevoegen van een nieuwe regel.
             */
            if (isset($_COOKIE["kanLopen"]) && $_COOKIE["kanLopen"] == "true")
            {
                $this->implementeerVervoersMiddel("Regiotaxi", "routeDetails");
                // plaats onder deze regel een alternatief vervoersmiddel die slechts onderaan staat als de persoon kan lopen
                
            }
            // plaats onder deze regel een alternatief vervoersmiddel als je deze altijd onderaan wilt

            echo"</div>";
            echo"<div id='routes'>";
            // loop through the sorted array and fetch each key corresponding to the class field `routes`
            foreach ($routesToOutput as $routeNr => $unixDepartureTime)
            {
                $route = $this->routes[$routeNr];
                $route->printRoute($routeNr);
            }
            /*
             * IMPLEMENTEER ALTERNATIEVE ROUTES
             * 
             * Hier kun je een alternatieve route toevoegen door simpelweg het volgende stukje code 
             * te kopiëren en te plakken onder de rest van de regels:
             * 
             * $this->implementeerVervoersMiddel("naam_van_vervoermiddel", "routeDetails_of_route?");
             * 
             * Hierbij moeten twee parameters(gescheiden door een comma) tussen de haakjes meegezonden worden.
             * Bij "naam_van_vervoermiddel" kun je een geheel eigen naam bedenken, deze wordt doorgevoerd 
             * en ook als kopje gebruikt.(Bijv: "Leerlingenvervoer") De tweede parameter zegt iets over of het een 
             * blokje links is of een complete beschijving van de route. Kies voor "routeDetails" als slechts 
             * enkele details op het scherm te zien moeten zijn in een klein blokje aan de linkerkant van het 
             * scherm. Kies voor "route" als je een beschrijving van de route in het rechtergedeelte van de 
             * website wilt waarbij ook een Google Maps routeplanner wordt weergegeven.
             * 
             * Het script maakt hieronder een check op de vragen die vooraf gesteld worden, die gaan over
             * of de persoon kan lopen of niet.
             * Plaats de regel tussen deze if{} - statement als je wilt dat deze pas ONDERAAN komt te
             * staan indien de persoon goed kan lopen en dus GEEN alternatief vervoer nodig heeft.
             * 
             * Er is ruimte vrijgelaten voor het toevoegen van een nieuwe regel.
             */
            $this->implementeerVervoersMiddel("Regiotaxi", "route");
            // plaats onder deze regel een alternatief vervoersmiddel om te laten zien op het scherm
            
        }
        else
        {
            if ($return === "lastKey")
            {
                foreach ($routesToOutput as $routeNr => $unixDepartureTime)
                {
                    $nrToReturn = $routeNr;
                }
                // when the loop has ended the value of $nrToReturn contains the last key
                return $nrToReturn;
            }
            else
            {
                reset($routesToOutput);
                return key($routesToOutput);
            }
        }
    }

    public function implementeerVervoersMiddel($vervoersmiddel = "Regiotaxi", $soort = "route")
    {
        $vervoer = $vervoersmiddel;
        $driving_information = get_driving_information(urlencode($this->getFrom()), urlencode($this->getTo()));
        $tijdsduur = $driving_information[0];
        $duration = $tijdsduur;
        $afstand = $driving_information[1];
        if ($vervoer === "Regiotaxi")
        {
            $vervoer = ($afstand > 25000 ? "Valys" : "Regiotaxi"); // kijken of er met de Valys of Regiotaxi gegaan moet worden
            $duration = formatDurationStringRegioTaxi($tijdsduur); // Tel er een half uur bij op
        }
        $aankomsttijd = date("H:i", strtotime($this->getTime() . "+" . preg_replace(array("/dag/", "/uur/", "/min/"), array("days", "hours", "minutes"), $duration)));

        if ($soort === "routeDetails")
        {
            echo"<div id='routeDetailsHeader'>" . $vervoersmiddel . "</div>";
            echo"<div class='detailedRoute' data-detailnr='" . strtolower($vervoersmiddel) . "'>";
            echo"<div class='time'>" . $this->getTime() . " " . ARROW . " " . $aankomsttijd . "</div>";
            echo"<div class='route-arrow' data-arrow-detailnr='" . strtolower($vervoersmiddel) . "'></div>";
            echo"<div class='steps'>Wachttijd: incl. 30 min.</div>";
            echo"<div class='duration'>Reistijd: " . $duration . ".</div>";
            echo"</div>";
        }
        else
        {
            echo"<div class='route' data-routenr='" . strtolower($vervoersmiddel) . "'>";
            echo"<div class='description'>Van " . $this->getFrom() . " naar " . $this->getTo() . " </div>";
            echo"<div class='depart_arrive'>" . $this->getTime() . " " . ARROW . " " . $aankomsttijd . "</div>";
            echo"<div class='step'>
                    <div class='details'>
                        <img src='images/car.png' alt='Auto' title='Auto'>
                        <div class='lineName'>" . $vervoer . "</div>
                        <div class='richting'></div>
                        <div class='lineAgency'>" . ($vervoersmiddel == "Regiotaxi" ? "WMO" : "Regionaal") . "</div>
                    </div>
                    <div class='departure'>
                        <div class='departureTime'>" . $this->getTime() . "</div>
                        <div class='departureStop'>" . $this->getFrom() . "</div>
                    </div>
                    <div class='arrival'>
                        <div class='arrivalTime'>" . $aankomsttijd . "</div>
                        <div class='arrivalStop'>" . $this->getTo() . "</div>
                    </div>
                 </div>";
            echo"</div>";
        }
    }

    /**
     * Field Setters
     * 
     * @param string $from, $to, $date, $time, $how
     */
    private function setFrom($from)
    {
        $this->from = $from;
    }

    private function setTo($to)
    {
        $this->to = $to;
    }

    protected function setDate($date)
    {
        $this->date = $date;
    }

    protected function setTime($time)
    {
        $this->time = $time;
    }

    private function setHow($how)
    {
        $this->how = $how;
    }

    private function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Field Getters
     * 
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getHow()
    {
        return $this->how;
    }

    public function getStatus()
    {
        return $this->status;
    }

}

?>
