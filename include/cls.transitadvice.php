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
                 <div id='next-travel' data-nr='" . $this->printRoutes("firstKey") . "'>
                    Volgende reis: " . $this->routes[$this->printRoutes("firstKey")]->getDepartureTime() . "
                 </div>
                 <div id='backLink'><a href='" . $_SERVER["PHP_SELF"] . "' title='Plan opnieuw een reis'><span class='mirror'>" . ARROW . "</span>Plan opnieuw</a></div>
                 <div id='routeHeader'></div>";
            echo"<div id='routeDetails'>";
            echo"<div id='earlier_travel_options' onClick=\"window.location.href='" . $_SERVER["PHP_SELF"] . "?earlier&t=" . strtotime($this->routes[$this->printRoutes("firstKey")]->getDepartureTime()) . "&sa=" . urlencode($this->getFrom()) . "&ea=" . urlencode($this->getTo()) . "&d=" . urlencode($this->getDate()) . "&h=" . urlencode($this->getHow()) . "#plan'\">Eerdere reisopties<span class='arrow_top'>" . ARROW . "</span></div>";
            $this->printRoutes();
            echo"</div>";
            echo"</div>";
        }
        else
        {
            echo"<div id='transitAdvice'>
                    Er is geen reisadvies voor deze route beschikbaar. <br />
                    Controleer of u de begin- en eindbestemming juist heeft ingevuld, of probeer het later nogmaals.
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
            echo"<div id='later_travel_options' onClick=\"window.location.href='" . $_SERVER["PHP_SELF"] . "?later&t=" . $unixDepartureTime . "&sa=" . urlencode($this->getFrom()) . "&ea=" . urlencode($this->getTo()) . "&d=" . urlencode($this->getDate()) . "&h=" . urlencode($this->getHow()) . "#plan'\">Latere reisopties<span class='arrow_bottom'>" . ARROW . "</span></div>";
            echo"</div>";
            echo"<div id='routes'>";
            // loop through the sorted array and fetch each key corresponding to the class field `routes`
            foreach ($routesToOutput as $routeNr => $unixDepartureTime)
            {
                $route = $this->routes[$routeNr];
                $route->printRoute($routeNr);
            }
        }
        else
        {
            if ($return === "lastKey")
            {
                foreach($routesToOutput as $routeNr => $unixDepartureTime)
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
