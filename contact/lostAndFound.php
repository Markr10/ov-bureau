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
                <label for="firstName">Voornaam</label>
            </td>
            <td>
                <input type="text" name="voornaam" id="firstName" value="" maxlength="12" />
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
        <tr>
            <td>
                <label for="objectKind" class="required">Omschrijving van voorwerp</label>
            </td>
            <td>
                <select name="objectKind" id="objectKind" required>
                    <option value="" selected="selected">Maak uw keuze...</option>
                    <option value="Kleding" >Kleding</option>
                    <option value="Telefoon" >Telefoon</option>
                    <option value="Muziekspeler" >Muziekspeler</option>
                    <option value="Portemonee/Geldpas/OVchipkaart" >Portemonee/Geldpas/OVchipkaart</option>
                    <option value="Paspoort/Idkaart/Rijbewijs" >Paspoort/Idkaart/Rijbewijs</option>
                    <option value="Tas" >Tas</option>
                    <option value="Paraplu" >Paraplu</option>
                    <option value="Sleutel(s)" >Sleutel(s)</option>
                    <option value="Laptop" >Laptop</option>
                    <option value="Overig" >Overig</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="description">Omschrijving</label>
            </td>
            <td>
                <textarea name="omschrijving" id="description" style="width:300px;" ></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <label for="lineNumber" class="required">Lijnnummer</label>
            </td>
            <td>
                <input type="text" name="lijnnummer" id="lineNumber" value="" maxlength="8" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="boardingStop" class="required">Instaphalte</label>
            </td>
            <td>
                <input type="text" name="instapHalte" id="boardingStop" value="" maxlength="50" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="exitStop" class="required">Uitstaphalte</label>
            </td>
            <td>
                <input type="text" name="uitstaphalte" id="exitStop" value="" maxlength="8" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="time" class="required">Tijd</label>
            </td>
            <td>
                <input type="text" name="tijd[0]" id="time_0" value="" maxlength="2" style="width:25px;" required />
                :
                <input type="text" name="tijd[1]" id="time_1" value="" maxlength="2" style="width:25px;" required />
            </td>
        </tr>
        <tr>
            <td>
                <label for="lostDate" class="required">Datum van verlies</label>
            </td>
            <td>
                <input type="text" name="datumVerlies" id="lostDate" value="" required />
            </td>
        </tr>
    </table>
</fieldset>
<!-- <br />
<fieldset>
    <legend>Overige gegevens</legend>
    <table>
        
        <tr>
            <td>
                <label for="objectDescription" class="required">Soort voorwerp</label>
            </td>
            <td>
                <select name="objectDescription" id="objectDescription" required>
                    <option value="" selected="selected">Maak uw keuze...</option>
                    <option value="Kledingstuk" >Kledingstuk</option>
                    <option value="Das/sjaal" >Das/sjaal</option>
                    <option value="Handschoenen" >Handschoenen</option>
                    <option value="Iphone" >Iphone</option>
                    <option value="Samsung" >Samsung</option>
                    <option value="Hoofddeksel" >Hoofddeksel</option>
                    <option value="Jas" >Jas</option>
                    <option value="HTC" >HTC</option>
                    <option value="Nokia" >Nokia</option>
                    <option value="Sony" >Sony</option>
                    <option value="Blackberry" >Blackberry</option>
                    <option value="LG" >LG</option>
                    <option value="Huawei" >Huawei</option>
                    <option value="Overig" >Overig</option>
                    <option value="Portemonnee" >Portemonnee</option>
                    <option value="Geldpas/pinpas" >Geldpas/pinpas</option>
                    <option value="OV-chipkaart" >OV-chipkaart</option>
                    <option value="Trui/Vest" >Trui/Vest</option>
                    <option value="Schoenen" >Schoenen</option>
                    <option value="Laptop" >Laptop</option>
                    <option value="Tablet" >Tablet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="objectColor" class="required">Kleur</label>
            </td>
            <td>
                <select name="objectKind" id="objectKind" required>
                    <option value="" selected="selected">Maak uw keuze...</option>
                    <option value="Rood" >Rood</option>
                    <option value="Groen" >Groen</option>
                    <option value="Blauw" >Blauw</option>
                    <option value="Geel" >Geel</option>
                    <option value="Grijs" >Grijs</option>
                    <option value="Wit" >Wit</option>
                    <option value="Zwart" >Zwart</option>
                    <option value="Anders" >Anders</option>
                </select>
            </td>
        </tr>
    </table>
</fieldset> -->