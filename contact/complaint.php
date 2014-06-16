<script>
    $(function() {
        $("#datepicker").datepicker({
            showOn: "both", // show onclick calendar AND textfield
            buttonImage: "images/calendar-icon.gif", // define image path to calendar
            buttonImageOnly: true, // calendar image, no button
            showButtonPanel: true, // show buttons for 'today' and 'done'
            changeMonth: true, // month = changeable
            changeYear: true, // year = changeable
            dateFormat: 'dd-mm-yy', // date notation
            showWeek: false, // show week numbers
            buttonText: 'Open kalender',
            // NEDERLANDS
            closeText: 'Sluiten',
            prevText: '←',
            nextText: '→',
            currentText: 'Vandaag',
            monthNames: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
            monthNamesShort: ['januari', 'februari', 'maart', 'april', 'mei', 'juni',
                'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
            dayNames: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
            dayNamesShort: ['zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat'],
            dayNamesMin: ['zo', 'ma', 'di', 'wo', 'do', 'vr', 'za'],
            weekHeader: 'Wk',
            maxDate: 'dateToday'
        });
    });
    $(document).ready(function()
    {
        $("img[class='ui-datepicker-trigger']").each(function()
        {
            $(this).attr('style', 'height:20px; position:absolute; top:16px;right:10px;');
        });
    });
</script>



<fieldset>
    <legend>Persoonlijke gegevens</legend>
    <table>
        <tr>
            <td>
                <label for="title" class="required">Aanhef</label>
            </td>
            <td>
                <input type="radio" name="title" id="title_De heer" value="De heer">
                <label for="title_De heer">De heer</label>
                <input type="radio" name="title" id="title_Mevrouw" value="Mevrouw">
                <label for="title_Mevrouw">Mevrouw</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="initials" class="required">Voorletters</label>
            </td>
            <td>
                <input type="text" style="" name="initialen" id="initials" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="middleName">Tussenvoegsel</label>
            </td>
            <td>
                <input type="text" name="tussenVoegsel" id="middleName" maxlength="12" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="surname" class="required">Achternaam</label>
            </td>
            <td>
                <input type="text" name="achternaam" id="surname" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="postalCode" class="required">Postcode</label>
            </td>
            <td>
                <input type="text" name="postcode" id="postalCode" value="" maxlength="6" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="houseNumber" class="required">Huisnummer</label>
            </td>
            <td>
                <input type="text" name="huisnummer" id="houseNumber" value="" maxlength="5" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="houseNumberExtension">Huisnummer toev.</label>
            </td>
            <td>
                <input type="text" name="huisnummerToevoeging" id="houseNumberExtension" value="" maxlength="10"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="street" class="required">Straat</label>
            </td>
            <td>
                <input type="text" name="straat" id="street" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="city" class="required">Woonplaats</label>
            </td>
            <td>
                <input type="text" name="woonplaats" id="city" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="countryCode">Landcode</label>
            </td>
            <td>
                <input type="text" name="landcode" id="countryCode" value="+31" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="phoneNumber">Telefoonnummer</label>
            </td>
            <td>
                <input type="text" name="telefoonnummer" id="phoneNumber" value="" maxlength="15"/>
            </td>
        </tr>
            <td>
                <label for="cellNumber">Mobiel</label>
            </td>
            <td>
                <input type="text" name="mobielnummer" id="cellNumber" value="" maxlength="15" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="emailAddress" class="required">E-mail</label>
            </td>
            <td>
                <input type="text" name="emailAdres" id="emailAddress" value="" required />
            </td>
        </tr>
    </table>
</fieldset>
<br />
<fieldset>
    <legend>Klachtomschrijving</legend>
    <table>
        <tr>
            <td>
                <label for="complaintCategory" class="required">Categorie</label>
            </td>
            <td>
                <select name="complaintCategory" id="complaintCategory" required>
                    <option value="" selected="selected">Maak uw keuze...</option>
                    <option value="Dienstregeling" >Dienstregeling</option>
                    <option value="Halte" >Halte</option>
                    <option value="Veiligheid" >Veiligheid</option>
                    <option value="Reisinformatie" >Reisinformatie</option>
                    <option value="Vervoerbewijzen" >Vervoerbewijzen</option>
                    <option value="Personeel" >Personeel</option>
                    <option value="Voertuigen" >Voertuigen</option>
                    <option value="OV-Chipkaart" >OV-Chipkaart</option>
                    <option value="Anders" >Anders</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="datepicker" class="required">Datum voorval</label>
            </td>
            <td>
                <div class="pickDateTime">
                    <div class="datePicker">
                        <input type="text" name='datum' id="datepicker" value="<?php echo date("d-m-Y") ?>" required />
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="incidentTime" class="required">Tijd voorval</label>
            </td>
            <td>
                <input type="text" name="incidentTijd[0]" id="incidentTime_0" value="" maxlength="2" style="width:25px;" required />
                :
                <input type="text" name="incidentTijd[1]" id="incidentTime_1" value="" maxlength="2" style="width:25px;" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="complaintDescription" class="required">Omschrijving klacht</label>
            </td>
            <td>
                <textarea name="klachtBeschrijving" id="complaintDescription" style="width:300px;" required></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="boardingStop">Instaphalte</label>
            </td>
            <td>
                <input type="text" name="instaphalte" id="boardingStop" value="" maxlength="50"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="destination">Eindbestemming bus</label>
            </td>
            <td>
                <input type="text" name="bestemming" id="destination" value="" maxlength="50" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="lineNumber">Lijnnummer</label>
            </td>
            <td>
                <input type="text" name="lijnnummer" id="lineNumber" value="" maxlength="8" />
            </td>
        </tr>
    </table>
</fieldset>