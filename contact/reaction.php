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
                <input type="text" name="initialen" id="initials" value="" maxlength="50" required />
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
    <legend>Overige gegevens</legend>
    <table>
        <tr>
            <td>
                <label for="reactionCategory" class="required">Categorie</label>
            </td>
            <td>
              <select name="reactieCategorie" id="reactionCategory" required>
                <option value="" selected="selected">Maak uw keuze...</option>
                <option value="Dienstregeling" >Dienstregeling</option>
                <option value="Halte" >Halte</option>
                <option value="Veiligheid" >Veiligheid</option>
                <option value="Reisinformatie" >Reisinformatie</option>
                <option value="Vervoerbewijzen" >Vervoerbewijzen</option>
                <option value="Personeel" >Personeel/option>
                <option value="Voertuigen" >Voertuigen</option>
                <option value="OV-Chipkaart" >OV-Chipkaart</option>
                <option value="Anders" >Anders</option>
              </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="incidentDate" class="required">Datum voorval</label>
            </td>
            <td>
                <input type="text" name="incidentDatum" id="incidentDate" value="" required />
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
                <label for="reactionDescription" class="required">Omschrijving reactie</label>
            </td>
            <td>
                <textarea name="reactieBeschrijving" id="reactionDescription" style="width:300px;" required></textarea>
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