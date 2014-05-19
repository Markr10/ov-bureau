<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mobiliteit Noord Groningen</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="lib/jquery.min.js">
	</script>
	<script>
	$(document).ready(function(){
//contrast variabele om te onthouden in welke contrast de gebruiker zit
var contrast = 0;

//text vergroten
$("a.fontSizePlus").click(function(){
	$("#slogan").removeClass('footerSloganNormal').addClass('footerSloganBig');
	$("#footer").removeClass('footerSloganNormal').addClass('footerSloganBig');
	$("#menu").removeClass('menuPlanNormal').addClass('menuPlanBig');
	$("#plan").removeClass('menuPlanNormal').addClass('menuPlanBig');
	$("#content").removeClass('textNormal').addClass('textBig');
});

//text verkleinen
$("a.fontSizeMinus").click(function(){
	$("#slogan").removeClass('footerSloganBig').addClass('footerSloganNormal');
	$("#footer").removeClass('footerSloganBig').addClass('footerSloganNormal');
	$("#menu").removeClass('menuPlanBig').addClass('menuPlanNormal');
	$("#plan").removeClass('menuPlanBig').addClass('menuPlanNormal');
	$("#content").removeClass('textBig').addClass('textNormal');
});

//klik op contrastknop
$("img").click(function(){
  //hoog contrast
  if (contrast == 0)
  {
  	contrast = 1;
  	var backgroundColor = {'background-color': '#000'};
  	var textColor = {'color': '#D1E631'};
  	$("#menu").css(backgroundColor);
  	$("#slogan").css(backgroundColor);
  	$("#plan").css(backgroundColor);
  	$("#content").css(backgroundColor);
  	$("#footer").css(backgroundColor);
  	$("body").css(backgroundColor);
  	$("#content").css(textColor);
  	$("#slogan").css(textColor);
  	$("#menu").css(textColor);
  	$("#plan").css(textColor);
  	$("#footer").css(textColor);
  	$("#container").css('box-shadow', '5px 0px 5px 0px  #D1E631, -5px 0px 5px 0px #D1E631, 0px 5px 5px 0px #D1E631');
  	$("img").attr('src', 'images/contrastwit.png');


  }
  else
  {
	  //normaal contrast
	  contrast = 0;
	  $("#menu").removeAttr('style');
	  $("#slogan").removeAttr('style');
	  $("#slogan").removeAttr('style');
	  $("#plan").removeAttr('style');
	  $("#content").removeAttr('style');
	  $("#content").removeAttr('style');
	  $("#footer").removeAttr('style');
	  $("body").removeAttr('style');
	  $("#container").css('box-shadow', '5px 0px 5px 0px  #888888, -5px 0px 5px 0px #888888, 0px 5px 5px 0px #888888');
	  $("img").attr('src', 'images/contrast.png');
	}
	
});
});
</script>
</head>

<body>
	<div id="container">
		<div id="menu" class="menuPlanNormal"> <img src="images/contrast.png"/>
			<div id="textSize">
				<a href="#" class="fontSizePlus">A+</a> | <a href="#" class="fontSizeMinus">A-</a>
			</div>
			<ul>
				<li>
					<a href="index.htm">Home</a>
				</li>
				<li>Waarom OV</li>
				<li>
					<a href="contact.php" >Contact</a>
				</li>
			</ul>
		</div>
		<div id="slogan" class="footerSloganNormal">Reis met het openbaar vervoer!</div>
		<div id="header"></div>
		<div id="plan" class="menuPlanNormal">Contact ons</div>
		<div id="contact" class="textNormal">
			<form>
        
			    <label>Name</label>
			    <input name="name" placeholder="Type Here">
			            
			    <label>Email</label>
			    <input name="email" type="email" placeholder="Type Here">
			            
			    <label>Message</label>
			    <textarea name="message" placeholder="Type Here"></textarea>
			            
			    <input id="submit" name="submit" type="submit" value="Submit"/>
			        
			</form>
		</div>
		<div id="footer" class="footerSloganNormal">&copy; 2014 - by INF2D</div>
	</div>
</body>
</html>