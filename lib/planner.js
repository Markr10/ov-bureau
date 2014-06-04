$(document).ready(function() {
    $("#planner input").filter(":first").focus();


    /**
     * jQuery for handling clicks on transitAdvice
     */
    
    // set first travel as active default
    var firstRoute = $("#next-travel").attr("data-nr");
    $("div[data-routeNr='" + firstRoute + "']").attr("class","route active");
    $("div[data-detailNr='" + firstRoute + "']").attr("class","detailedRoute active");

    $(".detailedRoute").click(function() {
        // switch between routeDetails
        $(".detailedRoute").attr("class", "detailedRoute");
        $(this).attr("class", "detailedRoute active");

        // switch between routes
        $(".route").attr("class", "route");
        var routeNr = $(this).attr("data-detailNr");
        $("div[data-routeNr='" + routeNr + "']").attr("class","route active");
    });
});