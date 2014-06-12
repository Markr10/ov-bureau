$(document).ready(function(){
    // contrast variabele om te onthouden in welke contrast de gebruiker zit
    var contrast = 0;
    
    // klik op contrastknop
    $("#menu img").click(function(){
        // hoog contrast
        if (contrast === 0)
        {
            contrast = 1;            
            var backgroundColor = {'background-color': '#000'};
            var backgroundColorGreen = { 'background-color': '#D1E631'};
            var textColor = {'color': '#D1E631'};
            var textColorBlack = {'color': '#000'};
            var border = { 'border-bottom': '1px solid #D1E631' };
            var borderheader = { 'border-bottom': '2px solid #D1E631' };
            $("#menu").css(backgroundColor);
            $("#slogan").css(backgroundColor);
            $("#plan").css(backgroundColor);
            $("#content").css(backgroundColor);
            $("#contact").css(backgroundColor);
            $("#container").css(backgroundColor);
            $("#argumenten").css(backgroundColor);
            $("#inleiding").css(backgroundColor);
            $("#afbeeldingen").css(backgroundColor);
            $("#footer").css(backgroundColor);
            $("body").css(backgroundColor);
            $("#transitAdvice").css(backgroundColor);
            $("#transitAdvice #routeHeader").css(borderheader);
            $("#from-to").css(backgroundColor);
            $("#next-travel").css(backgroundColor);
            $("#routeHeader").css(backgroundColor);
            $("#routeDetails").css(backgroundColor);
            $("#detailedRoute").css(backgroundColor);
            $("#routeDetails .detailedRoute").css(border);
            $("#routes").css(backgroundColor);
            $("#routes .route").css(backgroundColor);
            $(".route .step .departure").css(backgroundColor);
            $(".route .step .arrival").css(backgroundColor);
            $("#routeDetails #earlier_travel_options, #routeDetails #later_travel_options").css(backgroundColor);
            $("#routeDetails #earlier_travel_options, #routeDetails #later_travel_options").css(border);
            $("#routeDetails #earlier_travel_options .arrow_top").css(textColor);
            $("#routeDetails #later_travel_options .arrow_bottom").css(textColor);
            
            $("#routeDetails .detailedRoute").css(backgroundColor);
            $("#routeDetails .detailedRoute .time").css(backgroundColor);
            $("#routeDetails .detailedRoute .steps").css(backgroundColor);
            $("#routeDetails .detailedRoute .duration").css(backgroundColor);
            $("#routeDetails .detailedRoute .route-arrow").css(backgroundColorGreen);            

            $("#routeDetails .detailedRoute.active").css(backgroundColor);
            $("#routeDetails .detailedRoute.active .time").css(backgroundColorGreen);
            $("#routeDetails .detailedRoute.active .steps").css(backgroundColor);
            $("#routeDetails .detailedRoute.active .duration").css(backgroundColor);
            
            $("input[type=submit]").css(backgroundColorGreen);
            $("input[type=submit]").css(textColorBlack);
           
            $("#content").css(textColor);
            $("#contact").css(textColor);
            $("#argumenten").css(textColor);
            $("#inleiding").css(textColor);
            $("#slogan").css(textColor);
            $("#menu").css(textColor);
            $("#menu a").css(textColor);
            $("#plan").css(textColor);
            $("#footer").css(textColor);
            $("#transitAdvice").css(textColor);
            $("#from-to").css(textColor);
            $("#next-travel").css(textColor);
            $("#routeHeader").css(textColor);
            $("#routeDetails").css(textColor);
            $("#detailedRoute").css(textColor);
            $("#routes").css(textColor);
            $("#routeDetails .detailedRoute .steps").css(textColor);
            $("#routeDetails .detailedRoute .duration").css(textColor);
            $("#backLink a").css(textColor);            
            $("#routes .route .step .details .lineAgency").css(textColor);
            
            $("#routeDetails #earlier_travel_options, #routeDetails #later_travel_options").css(textColor);
            $("#routeDetails .detailedRoute.active .time").css(textColorBlack);
            $("#container").css('box-shadow', '5px 0px 5px 0px  #D1E631, -5px 0px 5px 0px #D1E631, 0px 5px 5px 0px #D1E631');
            $("#menu img").attr('src', 'images/contrastwit.png');
            
            //$.cookie(contrast, 1, {path: '/'}); // set the cookie to true
        }
        else
        {           
            // normaal contrast
            contrast = 0;
            $("#menu").removeAttr('style');
            $("#menu a").removeAttr('style');
            $("#slogan").removeAttr('style');
            $("#container").removeAttr('style');
            $("#plan").removeAttr('style');
            $("#content").removeAttr('style');
            $("#contact").removeAttr('style');
            $("#argumenten").removeAttr('style');
            $("#afbeeldingen").removeAttr('style');
            $("#inleiding").removeAttr('style');
            $("#footer").removeAttr('style');
            $("body").removeAttr('style');
            $("#transitAdvice").removeAttr('style');
            $("#from-to").removeAttr('style');
            $("#next-travel").removeAttr('style');
            $("#routeHeader").removeAttr('style');
            $("#routeDetails").removeAttr('style');
            $("#detailedRoute").removeAttr('style');
            $("#routes").removeAttr('style');
            $("#routes .route").removeAttr('style');
            $("#routes .route .step .details .lineAgency").removeAttr('style');
            $("#backLink a").removeAttr('style');
            $("input[type=submit]").removeAttr('style');
            
            $(".route .step .departure").removeAttr('style');
            $(".route .step .arrival").removeAttr('style');
            $("#routeDetails .detailedRoute .time, #routeDetails #earlier_travel_options, #routeDetails #later_travel_options").removeAttr('style');
            $("#routeDetails #earlier_travel_options .arrow_top").removeAttr('style');
            $("#routeDetails #later_travel_options .arrow_bottom").removeAttr('style');
            
            $("#routeDetails .detailedRoute").removeAttr('style');
            $("#routeDetails .detailedRoute .time").removeAttr('style');
            $("#routeDetails .detailedRoute .steps").removeAttr('style');
            $("#routeDetails .detailedRoute .duration").removeAttr('style');
            $("#routeDetails .detailedRoute .route-arrow").removeAttr('style');

            $("#routeDetails .detailedRoute.active").removeAttr('style');
            $("#routeDetails .detailedRoute.active .time").removeAttr('style');
            $("#routeDetails .detailedRoute.active .steps").removeAttr('style');
            $("#routeDetails .detailedRoute.active .duration").removeAttr('style');
                       
            $("#container").css('box-shadow', '5px 0px 5px 0px  #888888, -5px 0px 5px 0px #888888, 0px 5px 5px 0px #888888');
            $("#menu img").attr('src', 'images/contrast.png');
            
            //$.cookie(contrast, 0, {path: '/'}); // set the cookie to false
        }
    });
    
    //Pijl bij de geselecteerde reisoptie
    $("#routeDetails").click(function(){
        var backgroundColor = {'background-color': '#000'};
        var backgroundColorGreen = { 'background-color': '#D1E631'};
        var textBlack = { 'color': '#000'};
        var textGreen = { 'color': '#D1E631'};
        if (contrast === 1)
        {
            $("#routeDetails .detailedRoute").css(backgroundColor);
            $("#routeDetails .detailedRoute .time").css(backgroundColor);
            $("#routeDetails .detailedRoute .steps").css(backgroundColor);
            $("#routeDetails .detailedRoute .duration").css(backgroundColor);
            $("#routeDetails .detailedRoute .route-arrow").css(backgroundColorGreen);            
            $("#routeDetails .detailedRoute .time").css(textGreen);

            $("#routeDetails .detailedRoute.active").css(backgroundColor);
            $("#routeDetails .detailedRoute.active .time").css(backgroundColorGreen);
            $("#routeDetails .detailedRoute.active .steps").css(backgroundColor);
            $("#routeDetails .detailedRoute.active .duration").css(backgroundColor);
            $("#routeDetails .detailedRoute.active .time").css(textBlack);
        }
    });
    
    //hover reisopties
    $("#routeDetails").mouseover(function(){
        var backgroundColorGreen = { 'background-color': '#D1E631'};
        var textBlack = { 'color': '#000'};
        if (contrast === 1)
        {
            $("#routeDetails .detailedRoute:hover .time").css(backgroundColorGreen);
            $("#routeDetails .detailedRoute:hover .time").css(textBlack);
        }
    });
    
    $("#routeDetails").mouseout(function(){
        var backgroundColor = {'background-color': '#000'};
        var backgroundColorGreen = { 'background-color': '#D1E631'};
        var textBlack = { 'color': '#000'};
        var textGreen = { 'color': '#D1E631'};
        if (contrast === 1)
        {
            $("#routeDetails .detailedRoute .time").css(backgroundColor);
            $("#routeDetails .detailedRoute .time").css(textGreen);
            $("#routeDetails .detailedRoute.active .time").css(backgroundColorGreen);
            $("#routeDetails .detailedRoute.active .time").css(textBlack);
        }
    });
    
    //hover Eerdere reisopties
    $("#routeDetails #earlier_travel_options").mouseover(function(){
        var backgroundColorGreen = { 'background-color': '#D1E631'};
        var textBlack = { 'color': '#000'};
        if (contrast === 1)
        {
            $("#routeDetails #earlier_travel_options").css(backgroundColorGreen);
            $("#routeDetails #earlier_travel_options").css(textBlack);
            $("#routeDetails #earlier_travel_options .arrow_top").css(textBlack);
        }
    });
    
    $("#routeDetails #earlier_travel_options").mouseout(function(){
        var backgroundColor = {'background-color': '#000'};
        var textGreen = { 'color': '#D1E631'};
        if (contrast === 1)
        {
            $("#routeDetails #earlier_travel_options").css(backgroundColor);
            $("#routeDetails #earlier_travel_options").css(textGreen);
            $("#routeDetails #earlier_travel_options .arrow_top").css(textGreen);
        }
    });
    
    //hover Latere reisopties
    $("#routeDetails #later_travel_options").mouseover(function(){
        var backgroundColorGreen = { 'background-color': '#D1E631'};
        var textBlack = { 'color': '#000'};
        if (contrast === 1)
        {
            $("#routeDetails #later_travel_options").css(backgroundColorGreen);
            $("#routeDetails #later_travel_options").css(textBlack);
            $("#routeDetails #later_travel_options .arrow_bottom").css(textBlack);
        }
    });
    
    $("#routeDetails #later_travel_options").mouseout(function(){
        var backgroundColor = {'background-color': '#000'};
        var textGreen = { 'color': '#D1E631'};
        if (contrast === 1)
        {
            $("#routeDetails #later_travel_options").css(backgroundColor);
            $("#routeDetails #later_travel_options").css(textGreen);
            $("#routeDetails #later_travel_options .arrow_bottom").css(textGreen);
        }
    });

    // tekst vergroten
    $("a.fontSizePlus").click(function(){
        $("#slogan").removeClass('footerSloganNormal').addClass('footerSloganBig');
        $("#footer").removeClass('footerSloganNormal').addClass('footerSloganBig');
        $("#menu").removeClass('menuPlanNormal').addClass('menuPlanBig');
        $("#plan").removeClass('menuPlanNormal').addClass('menuPlanBig');
        $("#content").removeClass('textNormal').addClass('textBig');
        $("#contact").removeClass('textNormal').addClass('textBig');
        $("#inleiding").removeClass('textNormal').addClass('textBig');
        $("#argumenten").removeClass('textNormal').addClass('textBig');
        $("#transitAdvice").removeClass('textNormal').addClass('textBig');
        $("#from-to").removeClass('textNormal').addClass('textBig');
        $("#next-travel").removeClass('textNormal').addClass('textBig');
        $("#backLink").removeClass('textNormal').addClass('textBig');
        $("#routeDetails").removeClass('textNormal').addClass('textBig');
        $("#detailedRoute").removeClass('textNormal').addClass('textBig');
        $("#routes").removeClass('textNormal').addClass('textBig');
        $("input[type=submit]").removeClass('textNormal').addClass('textBig');
    });

    // tekst verkleinen
    $("a.fontSizeMinus").click(function(){
        $("#slogan").removeClass('footerSloganBig').addClass('footerSloganNormal');
        $("#footer").removeClass('footerSloganBig').addClass('footerSloganNormal');
        $("#menu").removeClass('menuPlanBig').addClass('menuPlanNormal');
        $("#plan").removeClass('menuPlanBig').addClass('menuPlanNormal');
        $("#content").removeClass('textBig').addClass('textNormal');
        $("#contact").removeClass('textBig').addClass('textNormal');
        $("#inleiding").removeClass('textBig').addClass('textNormal');
        $("#argumenten").removeClass('textBig').addClass('textNormal');
        $("#transitAdvice").removeClass('textBig').addClass('textNormal');
        $("#from-to").removeClass('textBig').addClass('textNormal');
        $("#next-travel").removeClass('textBig').addClass('textNormal');
        $("#backLink").removeClass('textBig').addClass('textNormal');
        $("#routeDetails").removeClass('textBig').addClass('textNormal');
        $("#detailedRoute").removeClass('textBig').addClass('textNormal');
        $("#routes").removeClass('textBig').addClass('textNormal');
        $("input[type=submit]").removeClass('textBig').addClass('textNormal');
    });
    
    
    
});