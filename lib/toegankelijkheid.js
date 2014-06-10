$(document).ready(function(){
    // contrast variabele om te onthouden in welke contrast de gebruiker zit
    var contrast = 0;

    // klik op contrastknop
    $("#menu img").click(function(){
        // hoog contrast
        if (contrast == 0)
        {
            contrast = 1;
            var backgroundColor = {'background': '#000'};
            var textColor = {'color': '#D1E631'};
            $("#menu").css(backgroundColor);
            $("#slogan").css(backgroundColor);
            $("#plan").css(backgroundColor);
            $("#content").css(backgroundColor);
            $("#contact").css(backgroundColor);
            $("#container").css(backgroundColor);
            $("#argumenten").css(backgroundColor);
            $("#inleiding").css(backgroundColor);
            $("#footer").css(backgroundColor);
            $("#afbeeldingen").css(backgroundColor);
            $("body").css(backgroundColor);
            $("transitAdvice").css(backgroundColor);
            $("#from-to").css(backgroundColor);
            $("#next-travel").css(backgroundColor);
            $("#routeHeader").css(backgroundColor);
            $("#routeDetails").css(backgroundColor);
            $("#detailedRoute").css(backgroundColor);
            $("#routes").css(backgroundColor);
            
            $("#content").css(textColor);
            $("#contact").css(textColor);
            $("#argumenten").css(textColor);
            $("#inleiding").css(textColor);
            $("#slogan").css(textColor);
            $("#menu").css(textColor);
            $("#menu a").css(textColor);
            $("#plan").css(textColor);
            $("#footer").css(textColor);
            $("transitAdvice").css(textColor);
            $("#from-to").css(textColor);
            $("#next-travel").css(textColor);
            $("#routeHeader").css(textColor);
            $("#routeDetails").css(textColor);
            $("#detailedRoute").css(textColor);
            $("#routes").css(textColor);
            $("#container").css('box-shadow', '5px 0px 5px 0px  #D1E631, -5px 0px 5px 0px #D1E631, 0px 5px 5px 0px #D1E631');
            $("#menu img").attr('src', 'images/contrastwit.png');


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
            $("#inleiding").removeAttr('style');
            $("#footer").removeAttr('style');
            $("#afbeeldingen").removeAttr('style');
            $("body").removeAttr('style');
            $("transitAdvice").removeAttr('style');
            $("#from-to").removeAttr('style');
            $("#next-travel").removeAttr('style');
            $("#routeHeader").removeAttr('style');
            $("#routeDetails").removeAttr('style');
            $("#detailedRoute").removeAttr('style');
            $("#routes").removeAttr('style');
            $("#container").css('box-shadow', '5px 0px 5px 0px  #888888, -5px 0px 5px 0px #888888, 0px 5px 5px 0px #888888');
            $("#menu img").attr('src', 'images/contrast.png');
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
        $("#from-to").addClass('textBig');
        $("#next-travel").addClass('textBig');
        $("#routeHeader").addClass('textBig');
        $("#routeDetails").addClass('textBig');
        $("#detailedRoute").addClass('textBig');
        $("#routes").addClass('textBig');
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
        $("#from-to").removeClass('textBig');
        $("#next-travel").removeClass('textBig');
        $("#routeHeader").removeClass('textBig');
        $("#routeDetails").removeClass('textBig');
        $("#detailedRoute").removeClass('textBig');
        $("#routes").removeClass('textBig');
    });
});
