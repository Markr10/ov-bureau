<fieldset>
    <legend>Persoonlijke gegevens</legend>                    <ul>
    <input type="hidden" name="accountId" id="accountId" value="0" data-attr-export="KPAccountID" />



</ul>
<ul>
    <li>
        <label for="title" class="required">Aanhef</label>

        <ul>
            <li>                <input type="radio" name="title" id="title_De heer" value="De heer">
                <label for="title_De heer">De heer</label>
                <input type="radio" name="title" id="title_Mevrouw" value="Mevrouw">
                <label for="title_Mevrouw">Mevrouw</label>


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="initials" class="required">Voorletters</label>

        <ul>
            <li>    <input type="text" name="initials" id="initials" value="" class="initials"        maxlength="50"    data-attr-export="KPInitialen"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <input type="hidden" name="firstName" id="firstName" value="" data-attr-export="KPVoornaam" />



</ul>
<ul>
    <li>
        <label for="middleName">Tussenvoegsel</label>

        <ul>
            <li>    <input type="text" name="middleName" id="middleName" value="" class="lowercase"        maxlength="12"    data-attr-export="KPTussenvoegsel" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="surname">Achternaam</label>

        <ul>
            <li>    <input type="text" name="surname" id="surname" value="" class="capitalize"        maxlength="50"    data-attr-export="KPAchternaam" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="postalCode">Postcode</label>

        <ul>
            <li>    <input type="text" name="postalCode" id="postalCode" value="" class="uppercase"        maxlength="6"    data-attr-export="KPPostcode" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="houseNumber">Huisnummer</label>

        <ul>
            <li>    <input type="text" name="houseNumber" id="houseNumber" value="" maxlength="5"    data-attr-export="KPHuisnummer" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="houseNumberExtension">Huisnummer toev.</label>

        <ul>
            <li>    <input type="text" name="houseNumberExtension" id="houseNumberExtension" value="" maxlength="10"    data-attr-export="KPToevoeging" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="street">Straat</label>

        <ul>
            <li>    <input type="text" name="street" id="street" value="" maxlength="50"    data-attr-export="KPStraat" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="city">Woonplaats</label>

        <ul>
            <li>    <input type="text" name="city" id="city" value="" class="uppercase"        maxlength="50"    data-attr-export="KPPLaats" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="countryCode">Landcode</label>

        <ul>
            <li>    <input type="text" name="countryCode" id="countryCode" value="+31" class="ov-chipcard-segment"            data-attr-export="KPLandcode" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="areaCode">Telefoonnummer</label>

        <ul>
            <li>    <input type="text" name="areaCode" id="areaCode" value="" class=" areacode"        maxlength="5"    data-attr-export="KPNetnummer"        placeholder="050" />
                <input type="text" name="phone" id="phone" value="" class=" localnumber"        maxlength="15"    data-attr-export="KPTelefoonnummer" />




            </li>
        </ul>
    </li>

</ul>
<ul>

</ul>
<ul>
    <li>
        <label for="cellNumber">Mobiel</label>

        <ul>
            <li>    <input type="text" name="cellNumber" id="cellNumber" value="" maxlength="15"    data-attr-export="KPTelefoon mobiel" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="emailAddress">E-mail</label>

        <ul>
            <li>    <input type="text" name="emailAddress" id="emailAddress" value="" class="lowercase"            data-attr-export="KPE-mailadres" />


            </li>
        </ul>
    </li>

</ul>

</fieldset>

<br /><fieldset>
<legend>Groepsinformatie</legend>                    <ul>
<input type="hidden" name="birthDate" id="birthDate" value="" data-attr-export="KPGeboortedatum" />



</ul>
<ul>
    <input type="hidden" name="ibanNumber" id="ibanNumber" value="" data-attr-export="KPIBAN nummer" />



</ul>
<ul>
    <input type="hidden" name="engravedId" id="engravedId" value="" data-attr-export="KPOV Chipkaartnummer" />



</ul>
<ul>
    <li>
        <label for="organisation" class="required">Bedrijf/Instelling</label>

        <ul>
            <li>    <input type="text" name="organisation" id="organisation" value="" maxlength="50"    data-attr-export="C011Organisatie (import)"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="contactPerson">Contactpersoon</label>

        <ul>
            <li>    <input type="text" name="contactPerson" id="contactPerson" value="" maxlength="50"    data-attr-export="C011Contactpersoon (import)" />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <input type="hidden" name="date" id="date" value="" data-attr-export="C011Datum binnenkomst" />



</ul>
<ul>
    <input type="hidden" name="region" id="region" value="" data-attr-export="C011Regio"    required />



</ul>
<ul>
    <li>
        <label for="departureTime" class="required">Vertrektijd heen</label>

        <ul>
            <li>        <input type="text" name="departureTime[0]" id="departureTime_0" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C011Vertrek heen"    required />
                :
                <input type="text" name="departureTime[1]" id="departureTime_1" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C011Vertrek heen"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="returnTime" class="required">Vertrektijd terug</label>

        <ul>
            <li>        <input type="text" name="returnTime[0]" id="returnTime_0" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C011Vertrek terug"    required />
                :
                <input type="text" name="returnTime[1]" id="returnTime_1" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C011Vertrek terug"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="numberOfAdults" class="required">Aantal volwassenen (+18 jr)</label>

        <ul>
            <li>    <input type="text" name="numberOfAdults" id="numberOfAdults" value="" maxlength="5"    data-attr-export="C011Aantal volwassenen (+18 jr)"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="numberOfChildren" class="required">Aantal kinderen (4-11 jr)</label>

        <ul>
            <li>    <input type="text" name="numberOfChildren" id="numberOfChildren" value="" maxlength="5"    data-attr-export="C011Aantal kinderen (4-11 jr)"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="numberOfChildren2" class="required">Aantal kinderen (+12 jr)</label>

        <ul>
            <li>    <input type="text" name="numberOfChildren2" id="numberOfChildren2" value="" maxlength="5"    data-attr-export="C011Aantal kinderen (+12 jr)"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="numberOfAdults2" class="required">Aantal volwassenen (65+)</label>

        <ul>
            <li>    <input type="text" name="numberOfAdults2" id="numberOfAdults2" value="" maxlength="5"    data-attr-export="C011Aantal volwassenen (65+)"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <li>
        <label for="groupDescription">Omschrijving groep</label>

        <ul>
            <li>    <textarea name="groupDescription" id="groupDescription" data-attr-export="C011Omschrijving groep"></textarea>


            </li>
        </ul>
    </li>

</ul>
<ul>
    <input type="hidden" name="amount" id="amount" value="" data-attr-export="C011Berekende prijs" />



</ul>
<ul>
    <input type="hidden" name="logistics" id="logistics" value="" data-attr-export="C011Akkoord logistiek" />



</ul>
<ul>
    <input type="hidden" name="invoiceSent" id="invoiceSent" value="" data-attr-export="C011Factuur verstuurd" />



</ul>
<ul>
    <li>
        <label for="travelDate" class="required">Datum vervoer</label>

        <ul>
            <li>    <input type="text" name="travelDate" id="travelDate" value="" class=" date-picker"            data-attr-export="C011Datum vervoer"    required />


            </li>
        </ul>
    </li>

</ul>
<ul>
    <input type="hidden" name="uniqueId" id="uniqueId" value="53958d864dc42"  />



</ul>

</fieldset>