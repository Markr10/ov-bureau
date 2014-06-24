/**
 * jQuery to get GET-variables
 * 
 * @param {type} qs         document location
 * @returns {unresolved}    returns array of all GET parameters
 */
function getQueryParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
            tokens,
            re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
                = decodeURIComponent(tokens[2]);
    }

    return params;
}

var $_GET = getQueryParams(document.location.search);

/**
 * jQuery function to handle the input first-field focus
 * Also handles the clickable routes to switch between routes when the advice has popped up.
 */
$(document).ready(function() {
    $("#planner input").filter(":first").focus();

    /**
     * jQuery for handling clicks on transitAdvice
     */
    
    /*
    * set first travel as active default
    */ 
    // check if chosen for earlier or later options, only for transit so start displaying the first transit route
    if ($_GET["later"] === "true" || $_GET["earlier"] === "true")
    {
        firstRoute = $("#next-travel").attr("data-nr");
        $("div[data-routenr='" + firstRoute + "']").attr("class", "route active");
        $("div[data-detailnr='" + firstRoute + "']").attr("class", "detailedRoute active");
        $("div[data-arrow-detailnr='" + firstRoute + "']").attr("class", "route-arrow active");
    }
    else
    {
        if ($.cookie("kanLopen") === "false")
        {
            var firstRoute = "regiotaxi";
            $(function() {
                $("#map_canvas").attr("class", "map_canvas_active");
            });
        }
        else
        {
            firstRoute = $("#next-travel").attr("data-nr");
        }
        $("div[data-routenr='" + firstRoute + "']").attr("class", "route active");
        $("div[data-detailnr='" + firstRoute + "']").attr("class", "detailedRoute active");
        $("div[data-arrow-detailnr='" + firstRoute + "']").attr("class", "route-arrow active");
    }

    $(".detailedRoute").click(function() {
        var routeNr = $(this).attr("data-detailnr");

        // display map
        if (routeNr === "regiotaxi")
        {
            $("#map_canvas").attr("class", "map_canvas_active");
        }
        else
        {
            $("#map_canvas").attr("class", "map_canvas_inactive");
        }

        // switch between routeDetails
        $(".detailedRoute").attr("class", "detailedRoute");
        $(this).attr("class", "detailedRoute active");
        // handle display arrows
        $(".route-arrow").attr("class", "route-arrow");
        $("div[data-arrow-detailnr='" + routeNr + "']").attr("class", "route-arrow active");

        // switch between routes
        $(".route").attr("class", "route");
        $("div[data-routenr='" + routeNr + "']").attr("class", "route active");
    });
});


/**
 * Piece of JavaScript that handles the time input field, making it
 * user-friendly for inputting your time.
 */
//
//function presetTimeInput()
//{
//    if (document.getElementById("timepicker"))
//    {
//        var now = new Date();
//        var currentTime = (now.getHours() < 10 ? "0" + now.getHours() : now.getHours()) + ':' + (now.getMinutes() < 10 ? "0" + now.getMinutes() : now.getMinutes());
//        document.getElementById("timepicker").value = currentTime;
//    }
//}
//
//function clearTimeInput()
//{
//    if (document.getElementById("timepicker").value == "")
//    {
//        document.getElementById("timepicker").value = "--:--";
//    }
//}

/**
 * Function to add a colon in the middle
 // */
//function AddColon()
//{
//    var textBoxLength = document.getElementById("timepicker").value.length;
//    // first check how many digits there are
//    if (textBoxLength === 2)
//    {
//        // if the user filled in 2 digits, add a colon at the end
//        document.getElementById("timepicker").value += "";
//    }
//    
//}

/**
 * Functie om het ingevoerde getal te checken.
 * Het getal mag alleen numeriek zijn, alphabetische en speciale tekens worden niet toegelaten
 * 
 * @param {type} evt
 * @returns {Boolean}
 */
//function isNummer(evt) { // zonder punten/comma's
//    var charCode = (evt.which) ? evt.which : event.keyCode
//    if (charCode > 31 && (charCode < 48 || charCode > 57))
//        return false;
//    return true;
//}