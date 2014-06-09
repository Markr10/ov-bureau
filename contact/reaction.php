<fieldset>
    <legend>Persoonlijke gegevens</legend>                    <ul>
    <input type="hidden" name="accountID" id="accountID" value="0" data-attr-export="KPAccountID" />



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
      <label for="surname" class="required">Achternaam</label>

      <ul>
       <li>    <input type="text" name="surname" id="surname" value="" class="capitalize"        maxlength="50"    data-attr-export="KPAchternaam"    required />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="postalCode" class="required">Postcode</label>

      <ul>
       <li>    <input type="text" name="postalCode" id="postalCode" value="" class="uppercase"        maxlength="6"    data-attr-export="KPPostcode"    required />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="houseNumber" class="required">Huisnummer</label>

      <ul>
       <li>    <input type="text" name="houseNumber" id="houseNumber" value="" maxlength="5"    data-attr-export="KPHuisnummer"    required />


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
      <label for="street" class="required">Straat</label>

      <ul>
       <li>    <input type="text" name="street" id="street" value="" maxlength="50"    data-attr-export="KPStraat"    required />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="city" class="required">Woonplaats</label>

      <ul>
       <li>    <input type="text" name="city" id="city" value="" class="uppercase"        maxlength="50"    data-attr-export="KPPLaats"    required />


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
      <label for="emailAddress" class="required">E-mail</label>

      <ul>
       <li>    <input type="text" name="emailAddress" id="emailAddress" value="" class="lowercase"            data-attr-export="KPE-mailadres"    required />


       </li>
   </ul>
</li>

</ul>
<ul>
    <input type="hidden" name="birthDate" id="birthDate" value="" data-attr-export="KPGeboortedatum" />



</ul>
<ul>
    <input type="hidden" name="accountNumber" id="accountNumber" value="" data-attr-export="KPIBAN nummer" />



</ul>
<ul>
    <input type="hidden" name="engravedId" id="engravedId" value="" data-attr-export="KPOV Chipkaartnummer" />



</ul>
<ul>
    <input type="hidden" name="branch" id="branch" value="" data-attr-export="C001Vestiging" />



</ul>
<ul>
    <input type="hidden" name="travelNumber" id="travelNumber" value="" data-attr-export="KMRitnummer" />



</ul>
<ul>
    <input type="hidden" name="KMOmloopnummer" id="KMOmloopnummer" value="" data-attr-export="KMOmloopnummer" />



</ul>
<ul>
    <input type="hidden" name="KMDienstnummer" id="KMDienstnummer" value="" data-attr-export="KMDienstnummer" />



</ul>
<ul>
    <input type="hidden" name="KMChauffeursnummer" id="KMChauffeursnummer" value="" data-attr-export="KMChauffeursnummer" />



</ul>

</fieldset>

<br /><fieldset>
<legend>Overige gegevens</legend>                    <ul>
<input type="hidden" name="region" id="region" value="" data-attr-export="KMRegio" />



</ul>
<ul>
   <li>
      <label for="reactionCategory" class="required">Categorie</label>

      <ul>
       <li>

        <select name="reactionCategory" id="reactionCategory" data-attr-export="C001Categorie reactie"    required
        data-attr-id=reactionCategory>
        <option value="" selected="selected">Maak uw keuze...</option>
        <option value="Dienstregeling"data-attr-key="42">Dienstregeling</option>
        <option value="Halte"data-attr-key="43">Halte</option>
        <option value="Veiligheid"data-attr-key="44">Veiligheid</option>
        <option value="Reisinformatie"data-attr-key="45">Reisinformatie</option>
        <option value="Vervoerbewijzen"data-attr-key="46">Vervoerbewijzen</option>
        <option value="Personeel"data-attr-key="47">Personeel/option>
            <option value="Voertuigen"data-attr-key="48">Voertuigen</option>
            <option value="OV-Chipkaart"data-attr-key="49">OV-Chipkaart</option>
            <option value="Anders"data-attr-key="50">Anders</option>
        </select>


    </li>
</ul>
</li>

</ul>
<ul>
   <li>
      <label for="incidentDate" class="required">Datum voorval</label>

      <ul>
       <li>    <input type="text" name="incidentDate" id="incidentDate" value="" class=" date-picker"            data-attr-export="C001Datum voorval"    required />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="incidentTime" class="required">Tijd voorval</label>

      <ul>
       <li>        <input type="text" name="incidentTime[0]" id="incidentTime_0" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C001Tijdstip voorval"    required />
        :
        <input type="text" name="incidentTime[1]" id="incidentTime_1" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="C001Tijdstip voorval"    required />


    </li>
</ul>
</li>

</ul>
<ul>
   <li>
      <label for="reactionDescription" class="required">Omschrijving reactie</label>

      <ul>
       <li>    <textarea name="reactionDescription" id="reactionDescription" data-attr-export="C001Reactieomschrijving"    required></textarea>


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="boardingStop">Instaphalte</label>

      <ul>
       <li>    <input type="text" name="boardingStop" id="boardingStop" value="" maxlength="50"    data-attr-export="C001Instaphalte" />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="destination">Eindbestemming bus</label>

      <ul>
       <li>    <input type="text" name="destination" id="destination" value="" maxlength="50"    data-attr-export="C001Eindbestemming bus" />


       </li>
   </ul>
</li>

</ul>
<ul>
   <li>
      <label for="lineNumber">Lijnnummer</label>

      <ul>
       <li>    <input type="text" name="lineNumber" id="lineNumber" value="" maxlength="8"    data-attr-export="C001Lijnnummer" />


       </li>
   </ul>
</li>

</ul>
<ul>
    <input type="hidden" name="uniqueId" id="uniqueId" value="53958d864dc42"  />



</ul>

</fieldset>