<fieldset>
    <legend>Persoonlijke gegevens</legend>
    <ul>
        <input type="hidden" name="accountID" id="accountID" value="0" data-attr-export="KPAccountID" />
    </ul>
    <ul>
        <li>
            <label for="title" class="required">Aanhef</label>
            <ul>
                <li>
                    <input type="radio" name="title" id="title_De heer" value="De heer">
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
                <li>
                    <input type="text" name="initials" id="initials" value="" class="initials" maxlength="50" data-attr-export="KPInitialen" required />
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
                <li>
                    <input type="text" name="middleName" id="middleName" value="" class="lowercase" maxlength="12" data-attr-export="KPTussenvoegsel" />
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <label for="surname" class="required">Achternaam</label>
            <ul>
                <li>
                    <input type="text" name="surname" id="surname" value="" class="capitalize" maxlength="50" data-attr-export="KPAchternaam" required />
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <label for="postalCode" class="required">Postcode</label>
            <ul>
                <li>
                    <input type="text" name="postalCode" id="postalCode" value="" class="uppercase" maxlength="6" data-attr-export="KPPostcode" required />
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <label for="houseNumber" class="required">Huisnummer</label>
            <ul>
                <li>
                    <input type="text" name="houseNumber" id="houseNumber" value="" maxlength="5" data-attr-export="KPHuisnummer" required />
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
    <legend>Klachtomschrijving</legend>                    <ul>
                <input type="hidden" name="region" id="region" value="" data-attr-export="KMRegio" />



</ul>
<ul>
         <li>
                  <label for="complaintCategory" class="required">Categorie</label>

              <ul>
         <li>

<select name="complaintCategory" id="complaintCategory" data-attr-export="KMCategorie klacht"    required
                 data-attr-id=complaintCategory>
                <option value="" selected="selected">Maak uw keuze...</option>
                <option value="Dienstregeling"data-attr-key="8">Dienstregeling</option>
                <option value="Halte"data-attr-key="9">Halte</option>
                <option value="Veiligheid"data-attr-key="10">Veiligheid</option>
                <option value="Reisinformatie"data-attr-key="11">Reisinformatie</option>
                <option value="Vervoerbewijzen"data-attr-key="12">Vervoerbewijzen</option>
                <option value="Personeel"data-attr-key="13">Personeel</option>
                <option value="Voertuigen"data-attr-key="14">Voertuigen</option>
                <option value="OV-Chipkaart"data-attr-key="15">OV-Chipkaart</option>
                <option value="Anders"data-attr-key="16">Anders</option>
        </select>

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="incidentDate" class="required">Datum voorval</label>

              <ul>
         <li>    <input type="text" name="incidentDate" id="incidentDate" value="" class=" date-picker"            data-attr-export="KMDatum voorval"    required />

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="incidentTime" class="required">Tijd voorval</label>

              <ul>
         <li>        <input type="text" name="incidentTime[0]" id="incidentTime_0" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="KMTijdstip voorval"    required />
:
<input type="text" name="incidentTime[1]" id="incidentTime_1" value="" class=" ov-chipcard-segment"        maxlength="2"    data-attr-export="KMTijdstip voorval"    required />

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="complaintDescription" class="required">Omschrijving klacht</label>

              <ul>
         <li>    <textarea name="complaintDescription" id="complaintDescription" data-attr-export="KMKlachtomschrijving"    required></textarea>

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="boardingStop">Instaphalte</label>

              <ul>
         <li>    <input type="text" name="boardingStop" id="boardingStop" value="" maxlength="50"    data-attr-export="KMInstaphalte" />

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="destination">Eindbestemming bus</label>

              <ul>
         <li>    <input type="text" name="destination" id="destination" value="" maxlength="50"    data-attr-export="KMEindbestemming bus" />

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
         <li>
                  <label for="lineNumber">Lijnnummer</label>

              <ul>
         <li>    <input type="text" name="lineNumber" id="lineNumber" value="" maxlength="8"    data-attr-export="KMLijnnummer" />

                 
         </li>
     </ul>
 </li>

</ul>
<ul>
                <input type="hidden" name="uniqueId" id="uniqueId" value="539584ed87044"  />



</ul>

</fieldset>