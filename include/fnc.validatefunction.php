<?php
function validateField($field)
{
	if(empty($field))
	{
		return "class=required";
	}
	else
	{
		return;
	}

}

function runDefaultSessions()
{
	$_SESSION["contactAlgemeen"] = array('title', 'initialen', 'achternaam', 'postcode', 'huisnummer', 'straat', 'woonplaats', 'emailAdres');
	$_SESSION["contactKlacht"] = array('complaintCategory', 'datum', 'incidentTijd0', 'incidentTijd1', 'klachtBeschrijving');
	$_SESSION["contactReactie"] = array('reactieCategorie', 'datum', 'incidentTijd0', 'incidentTijd1', 'reactieBeschrijving');
	$_SESSION["contactGroepsVervoer"] = array('organisatie', 'datum', 'vertrektijd0', 'vertrektijd1', 'vertrektijdTerug0', 'vertrektijdTerug1', 'reactieBeschrijving', 'aantalVolwassenen', 'aantalKinderen', 'aantalTieners', 'aantalSenioren');
	$_SESSION["contactGroepsVervoer"] = array('objectKind', 'datum', 'omschrijving', 'lijnnummer', 'instapHalte', 'uitstaphalte', 'tijd0', 'tijd1');
}
?>