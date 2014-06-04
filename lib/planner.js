$(document).ready(function() {
    $("#planner input").filter(":first").focus();


    /**
     * jQuery for handling clicks on transitAdvice
     */

    // set first travel as active default
    var firstRoute = $("#next-travel").attr("data-nr");
    $("div[data-routenr='" + firstRoute + "']").attr("class", "route active");
    $("div[data-detailnr='" + firstRoute + "']").attr("class", "detailedRoute active");
    $("div[data-arrow-detailnr='" + firstRoute + "']").attr("class", "route-arrow active");


    $(".detailedRoute").click(function() {
        var routeNr = $(this).attr("data-detailnr");
        
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