

<head>
<script src="<?=PATH_JS?>/js-pdf_script.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>-->
<script src="../public/packages/html2pdf.js-master/dist/html2pdf.bundle.js"></script>
</head>

<link rel="stylesheet" href="<?=PATH_CSS?>/passeport.css">

<nav class="back">
<div class="passeport">

<div class="pdf_container" id="pdf_container">
<div class="div-logo-passeport">
    <h1 class="pass_h1">Immunity Passport</h1>
</div>


<!---------- Info Passeport Section Starts ----------->
<div class="info">
    <div class="item1">
        <label id="statut" for="statut">My Status :</label>

        <select name="statuts" id="statuts-select">
            <option value="">-- Please select a status --</option>
            <option value="sain">Well</option>
            <option value="soupçons">Suspicion - Waiting for my test results</option>
            <option value="cas-contact">Contagious</option>
            <option value="positif">Positive at Covid-19</option>
        </select>
        <br><br><br>
        <table>
<thead>
<tr>
    <th colspan="4">Personal information</th>
</tr>
</thead>
<tbody>

<tr>
    <td class="first_cols">Gender :</td>
    <td class="second_cols">
        <?php
            $userGenre = $user->getUserGenre();
                        
            if (($userGenre != "") && ($userGenre != "none")) {
                echo "$userGenre";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>


    <td class="first_cols">Address : </td>
    <td class="second_cols"> <?php
            $userData = $user->getUserAdresse();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>
</tr>


<tr>
    <td class="first_cols">First Name: </td>
    <td class="second_cols">
        <?php
            $userData = $user->getUserNom();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>

        
    <td class="first_cols">City : </td>
    <td class="second_cols"> <?php
            $userData = $user->getUserVille();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>
</tr>


<tr>
    <td class="first_cols">Last Name :</td>
    <td class="second_cols">
        <?php
            $userData = $user->getUserPrenom();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>

        
    <td class="first_cols">Zip Code :</td>
    <td class="second_cols"> <?php
            $userData = $user->getUserCodePostal();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>
</tr>


<tr>
    <td class="first_cols">Birth :</td>
    <td class="second_cols">
        <?php
            $userData = $user->getUserNaiss();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>

        
    <td class="first_cols">Country :</td>
    <td class="second_cols"> <?php
            $userData = $user->getUserPays();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>
</tr>


<tr>
    <td class="first_cols">Personal email :</td>
    <td class="second_cols">
        <?php
            $userData = $user->getUserMail();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>

        
    <td class="first_cols"></td>
    <td class="second_cols"></td>
</tr>


<tr>
    <td class="first_cols">Phone number :</td>
    <td class="second_cols">
        <?php
            $userData = $user->getUserTelMobile();
                        
            if (($userData != "") && ($userData != "none")) {
                echo "$userData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?></td>

        
    <td class="first_cols">Imunity Passeport ID :</td>
    <td class="second_cols">
        <?php
            $passeData = $passeport->getSerialPassId();

            if (($passeData != "") && ($passeData != "none")) {
                echo "$passeData";
            }else{ echo "Not specified"?> <span class="warning-badge">!</span>
        <?php ; } ?>
    </td>
</tr>

</tbody>
</table>


    </div>
    <div class="item2">
        <div class="div-photo">
            <img  src="<?=PATH_ICONS?>/passmatt.PNG" alt="Passeport LOGO">
        </div>

    </div>
    
</div> 


<!------------------------ Info Passeport Section Ends ------------------------>
<!--------------------- History Covid-19 Section Starts ----------------------->

<div class="historique">
    <div class="item1">
        <br>
        <h3>My Covid-19 history</h3>
        <label for="historique-qu01-label">
            Is my immunization procedure completed in full ? : 
        </label>
        <label for="historique-qu01-label">
            YES
        </label>
        <p id="historique-details">(All doses of vaccine have been administered)</p>

        <br><br>
        <label for="historique-qu02-label">Are you currently being vaccinated ? : </label>

        <p id="historique-details">(If yes, please answer these four additional questions ...)</p>
        <label for="historique-details-qu01">1) When were you given your first dose ? (*) : </label>
        <input type="radio" id="oubli" value="forgot">
        <label>I Forgot / </label>

        <input type="date" id="historique-details-ans01">
        <br><br>
        <label for="historique-details-qu02">2) What is the name of the vaccine you were given ? (*) : </label>
        <select name="vaccins" id="historique-details-ans02">
            <option value="">-- Choose a vaccine --</option>
            <option value="Pfizer">Pfizer</option>
            <option value="Moderna">Moderna</option>
            <option value="AstraZeneca">AstraZeneca</option>
            <option value="Johnson&Johnson">Johnson&Johnson</option>

        </select>
        <br><br>
        <label for="historique-details-qu03">3) Have you scheduled an appointment for your second dose ? (*) : </label>
        <input type="radio" id="historique-details-ans03" name="historique-answers" value="yes" checked>
        <label for="historique-details-ans03">Yes</label>
        <input type="radio" id="historique-details-ans03" value="no">
        <label for="historique-details-ans03">No</label>
        <p id="historique-details">(If yes, please select the date of your next dose here ...)</p>
        <input type="date" id="2nd-dose-vaccine">
        <br><br>
        <label for="historique-details-qu04">4) Did you experience any side effects after your first inoculation ? (*) :</label>
        <br><br>
        <select name="effets-vaccin" id="historique-details-ans04" multiple size="5">
            <option value="nothing">No side effects</option>
            <optgroup label="Respiratory pain">
            <option value="moderate respiratory pain">Moderate respiratory pain</option>
            <option value="severe respiratory pain">Severe respiratory pain</option>
            </optgroup>
            <optgroup label="Headaches">
            <option value="moderate headaches ">Moderate headaches</option>
            <option value="severe headaches">Severe headaches</option>
            </optgroup>
            <optgroup label="Other">
            <option value="repeated vomiting">Repeated vomiting</option>
            <option value="kidney pain">Kidney pain</option>
            </optgroup>      

        </select>
        <br><br>
        <label id="historique-qu03">Have you ever been a victim of Covid-19 ? (*) : </label>
        <input type="radio" id="historique-ans01" value="yes" checked>
        <label>Yes</label>
        <input type="radio" id="historique-ans01" value="no">
        <label>No</label>
        <br>
        <p id="historique-details">(If yes, please answer these three additional questions ...)</p>
        <label>1) When was your last experience with the virus ? (*) : </label>
        <input type="radio" id="oubli" value="forgot">
        <label>I Forgot / </label>

        <input type="date" id="dernier-experience"> 
        <br><br>
        <label>2) Was it a particular form of the virus ? (*) : </label>
        <br><br>
        <select name="variants" id="historique-details-ans05" multiple size="3  ">
            <option value="common">Common form</option>
            <option value="british">British variant</option>
            <option value="brazilian">Brazilian variant</option>
            <option value="south african ">South African variant</option>
            <option value="indian ">Indian variant </option>

        </select>
        <br><br>
        <label>3) Did you have a hard time getting over it ? (*) :</label>
        <input type="radio" id="historique-ans01" value="yes" checked>
        <label>Yes</label>
        <input type="radio" id="historique-ans01" value="no">
        <label>No</label>
        <br><br>
        <label for="historique-qu04" id="historique-qu04">When was your last negative PCR (RT-PCR) test ? (*) : </label>
        <input type="radio" id="oubli" value="forgot">
        <label>I Forgot / </label>
        <input type="date" id="dernier-test-covid"> 
        <br><br>

    </div>
    
</div>   
<!----------------------------------------------------- History Covid-19 Section Ends ----------------------------->
<!----------------------------------------------------- Medical Profile User Section Starts ----------------------------->

<div class="profil-medical-user">
    <div class="item1">
        <h3>My medical profile</h3>
    <br><br>
    <label>Are you concerned by one or more of these characteristics ? (*) ;</label>
    <br><br>
    <select name="risques" id="profile-user-ans01" multiple size="3  ">
        <option value="nothing">Nothing</option>
        <option value="pregnant">Pregnant (More than 3 months)</option>
        <option value="cardiovascular">Cardiovascular history</option>
        <option value="diabete">Diabetes</option>
        <option value="obesity ">Obesity</option>
        <option value="respiratory">Respiratory Chornic Diseases</option>
        <option value="kidney">Kidney diseases</option>
        <option value="cancer">Cancers</option>
        <option value="cirrhosis">cirrhosis </option>
        <option value="splenectomy">splenectomy</option>
        <option value="sickle cell disease ">sickle cell disease </option>
    </select>
    <br><br>
    <label>Do you have a sensory disability ? (*) : </label>
    <br><br>
    <select name="handicap-sensoriel" id="profile-user-ans02" multiple size="3  ">
        <option value="nothing">Nothing</option>
        <option value="vision">Vision</option>
        <option value="hearing">Hearing problems</option>
        <option value="voice">Voice problems</option>
    </select>
    <br><br>
    <label>Do you have a mental disability ? (*) : </label>
    <br><br>
    <select name="handicap-psychique" id="profile-user-ans03" multiple size="3  ">
        <option value="nothing">Nothing</option>
        <option value="personality-desorder">Severe personality disorder : </option>
        <option value="ocd"> OCD - Obsessive Compulsive Disorder </option>
        <option value="asd">ASD - Autism Spectrum Disorder </option>
        <option value="ded">DED - Developmental Disorder  </option>
        <option value="other">Other</option>
    </select>
    <br><br>



    </div>

</div>
<br>
<!----------------------------------------------------- Medical  User Section Ends ----------------------------->
<!----------------------------------------------------- Contact Book  User Section Starts ----------------------------->
<div class="contact-book-user">
    <div class="item-1">
        <h3>My Contact Emergency book</h3>
        <br><br><br><br>
        <label>In case of need, who should we contact ?(Add 3 contacts minimum)</label>
        <br><br><br>
        <label id="contact-label">Contact n° 01 </label>
        <br><br><br>
        <label for="name-contact01" id="name-contact01-label">Name - Contact 01 (*) :</label>
        <input type="text" id="name-contact01"  placeholder="Please enter the complete name of your contact here ..." required>
        <label for="description-contact01" id="description-contact01-label">Description - Contact 01 (*):</label>
        <input type="text" id="description-contact01" placeholder="Please describe your contact in few words ...">
        <br><br>
        <label for="mobile-contact01" id="mobile-contact01-label">Mobile - Contact 01 (*) :</label>
        <input type="tel" required id="mobile-contact01" placeholder="e.g +33(0)601234567 ...">
        <label for="mail-contact01" id="mail-contact01-label">Email - Contact 01 (*) :</label>
        <input type="email" required id="mail-contact01" placeholder="Please enter an valid email here ...">
        <br><br><br><br>
        <label id="contact-label">Contact n° 02</label>
        <br><br><br>
        <label for="name-contact02" id="name-contact02-label">Name - Contact 02 (*) :</label>
        <input type="text" id="name-contact02"  placeholder="Please enter the complete name of your contact here ..." required>
        <label for="description-contact02" id="description-contact02-label">Description - Contact 02 (*):</label>
        <input type="text" id="description-contact02" placeholder="Please describe your contact in few words ...">
        <br><br>
        <label for="mobile-contact02" id="mobile-contact02-label">Mobile - Contact 02 (*) :</label>
        <input type="tel" required id="mobile-contact02" placeholder="e.g +33(0)601234567 ...">
        <label for="mail-contact02" id="mail-contact02-label">Email - Contact 02 (*) :</label>
        <input type="email" required id="mail-contact02" placeholder="Please enter an valid email here ...">
        <br><br><br><br>
        <label id="contact-label">Contact n° 03</label>
        <br><br><br>
        <label for="name-contact03" id="name-contact03-label">Name - Contact 03 (*) :</label>
        <input type="text" id="name-contact03"  placeholder="Please enter the complete name of your contact here ..." required>
        <label for="description-contact03" id="description-contact03-label">Description - Contact 03 (*):</label>
        <input type="text" id="description-contact03" placeholder="Please describe your contact in few words ...">
        <br><br>
        <label for="mobile-contact03" id="mobile-contact03-label">Mobile - Contact 03 (*) :</label>
        <input type="tel" required id="mobile-contact03" placeholder="e.g +33(0)601234567 ...">
        <label for="mail-contact03" id="mail-contact03-label">Email - Contact 03 (*) :</label>
        <input type="email" required id="mail-contact03" placeholder="Please enter an valid email here ...">
        <br><br><br>

    </div>
    </div>

</div>
<button class="btn btn-primary" id="downloadPdf">
	Télécharger ce document
</button>
</div>
</nav>
<!----------------------------------------------------- Contact Book  User Section Ends ----------------------------->




<!--
<h3 id="statut">Statut de l'utilisateur</h3>

<div class="div-photo">
<img src="/images/face_co-1.svg">
</div>

<label for="historique-details-qu04">4) Did you experience any side effects after your first inoculation ? :  </label>
        <select name="effets-vaccin" id="historique-details-ans04" multiple size="2">
            <option value="nothing">No side effects</option>
            <option value="effect01">Effect n°1</option>
            <option value="effect02">Effect n°2</option>
            <option value="effect03">Effect n°3</option>


        </select>

--> 




