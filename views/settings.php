



<link rel="stylesheet" href="<?=PATH_CSS?>/settings.css">
<div class="config_container">


<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="sidenav">
    <h5 style="color: white; text-align: center;"><?=_CONFIG_TITLE?></h5>
    <button class="dropdown-btn"><?=_INFO_GENERAL?> <i class="fa fa-caret-down"></i></button>
    <div class="dropdown_container-settings">
        
        <form method="POST">
        <table class="table_settings">
            <hr>
            <tr>
                <td>
                    <label for="nom_sett"><?=_NOM?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> Smith </label>
                </td>
                <td class="change_sett_input">
                    <input  id="nom_sett" type="text" name="nom_sett" 
                    placeholder="Modifier mon Nom"  autocomplete="off"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="nom_sett"> <?=_PRENOM?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> John </label>
                </td>
                <td class="change_sett_input">
                    <input id="prenom_sett" type="text" name="prenom_sett" 
                    placeholder="Modifier mon Prénom"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"><?=_GENDER?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> Masculin </label>
                </td>
                <td class="change_sett_input">
                    <input id="genre_sett" type="text" name="genre_sett" 
                    placeholder="Modifier mon sexe"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"> <?=_MAIL?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> example@mail.com </label>
                </td>
                <td class="change_sett_input">
                    <input id="prenom_sett" type="text" name="prenom_sett" 
                    placeholder="Modifier mon adresse mail"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"> Pseudo : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> myPseudo123 </label>
                </td>
                <td class="change_sett_input">
                    <input id="pseudo_sett" type="text" name="pseudo_sett" 
                    placeholder="Modifier mon Pseudonyme"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"><?=_NICK?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 12/12/2012 </label>
                </td>
                <td class="change_sett_input">
                    <input id="naiss_sett" type="date" name="naiss_sett" 
                    placeholder="Modifier ma date de naissance"  autocomplete="off"/>
                </td>
            </tr>
            <tr><td colspan="5"><hr></td></tr>

            <tr>
                <td colspan="3" style="text-align: center;" >
                    <input class="submit_settings" id="valid_infogen_sett" type="submit" name="validBtn_sett" value="<?=_SUBMIT?>" />
                </td>
            </tr>

        </form>
        </table>
        <hr>
    </div>

    <button class="dropdown-btn"><?=_MY_ADDRESS_CONTACT?> :<i class="fa fa-caret-down"></i></button>
    <div class="dropdown_container-settings">
    <form method="POST"><hr>
        <table class="table_settings">
            <tr> 
                <td>
                    <label for="nom_sett"><?=_ADDRESS?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 43 rue de nptq </label>
                </td>
                <td class="change_sett_input">
                    <input  id="adres_sett" type="text" name="adres_sett" 
                    placeholder="Modifier mon adresse"  autocomplete="off"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="nom_sett"> <?=_CITY?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> Paris </label>
                </td>
                <td class="change_sett_input">
                    <input id="ville_sett" type="text" name="ville_sett" 
                    placeholder="Modifier la ville"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"> <?=_COUNTRY?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> France </label>
                </td>
                <td class="change_sett_input">
                    <input id="pays_sett" type="text" name="pays_sett" 
                    placeholder="Modifier le pays"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"> <?=_POSTAL_CODE?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 75000 </label>
                </td>
                <td class="change_sett_input">
                    <input id="zip_sett" type="text" name="zip_sett" 
                    placeholder="Modifier le code postale"  autocomplete="off"/>
                </td>
            </tr>

            <tr><td colspan="3"><hr></td>
                
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"> <?=_PHONE?> : </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 0123456789 </label>
                </td>
                <td class="change_sett_input">
                    <input id="mob_sett" type="text" name="mob_sett" 
                    placeholder="Modifier mon numéro mobile"  autocomplete="off"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nom_sett"><?=_PHONE?>: </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 0202020200 </label>
                </td>
                <td class="change_sett_input">
                    <input id="fixe_sett" type="text" name="fixe_sett" 
                    placeholder="Modifier mon numéro fixe"  autocomplete="off"/>
                </td>
            </tr>

            

            <tr><td colspan="5"><hr></td></tr>






            <table class="table_settings">
            <tr>
                <td colspan="4" style="text-align:center;">
                    <label style="color:yellow;" for="nom_sett"> Mes contacts d'urgence : </label>
                </td>
            </tr>



            <tr>
                <td>
                    <label for="nom_sett"> <?=_PRENOM?> <?=_NOM?>: </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> Bouffala Mhand </label>
                </td>
                <td>
                    <label for="nom_sett"> <?=_PHONE?>: </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 06565106510 </label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input id="fax_sett" type="text" name="fax_sett" 
                    placeholder="Modifier le nom et le prénom"  autocomplete="off"/>
                </td>
                <td></td>
                <td>
                    <input id="fax_sett" type="text" name="fax_sett" 
                    placeholder="Modifier le numéro de contact"  autocomplete="off"/>
                </td>
            </tr>


            <tr style="margin-top:100px;">
                <td>
                    <label for="nom_sett"> <?=_PRENOM?> <?=_NOM?>: </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> nom contact 2 </label>
                </td>
                <td>
                    <label for="nom_sett"> <?=_PHONE?>: </label>
                </td>
                <td class="show_sett_label">
                    <label for="nom_sett"> 0777776510 </label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input id="fax_sett" type="text" name="fax_sett" 
                    placeholder="Modifier le nom et le prénom"  autocomplete="off"/>
                </td>
                <td></td>
                <td>
                    <input id="fax_sett" type="text" name="fax_sett" 
                    placeholder="Modifier le numéro de contact"  autocomplete="off"/>
                </td>
            </tr>

            


            <tr><td colspan="3"><hr></td></tr>

            <tr>
                <td colspan="4"   style="text-align: center;">
                    <input class="submit_settings" id="valid_infogen_sett" type="submit" name="validBtn_sett" value="<?=_SUBMIT?>" />
                </td>
            </tr>
        
        </table>

        </table>
        <hr>

    </form>
    </div>







<!--------------------------------   Sécurité   ------------------------------->

    <button class="dropdown-btn"><?=_SECURITY?><i class="fa fa-caret-down"></i></button>
    <div class="dropdown_container-settings">
        
        <form method="POST">
        <table class="table_settings">
            <hr>
            <tr>
                <td style="text-align: center;">
                    <label for="nom_sett"> <?=_PASSWORD?> : </label>
                </td>
                <td style="text-align: left;">
                    <input  id="nom_sett" type="text" name="nom_sett" 
                    placeholder="<?=_PASSWORD?>"  autocomplete="off"/>
                </td>
            </tr>
            
            <tr>
                <td style="text-align: center;">
                    <label for="nom_sett"> <?=_CONFIRM_PASSWORD?> : </label>
                </td>
                <td style="text-align: left;">
                    <input  id="nom_sett" type="text" name="nom_sett" 
                    placeholder="<?=_CONFIRM_PASSWORD?>"  autocomplete="off"/>
                </td>
            </tr>




            <tr><td colspan="5"><hr></td></tr>

            <tr>
                <td colspan="3" style="text-align: center;" >
                    <input class="submit_settings" id="valid_infogen_sett" type="submit" name="validBtn_sett" value="<?=_SUBMIT?>" />
                </td>
            </tr>

        </form>
        </table>
        <hr>
    </div>










<!-------------------------------   Rémarques   ------------------------------->

    <button class="dropdown-btn">Rémarques <i class="fa fa-caret-down"></i></button>
    <div class="dropdown_container-settings">
        
        <form method="POST">
        <table class="table_settings">
            <hr>
            <tr>
                <td style="text-align: center;">
                    <label for="nom_sett"> Rémarques et commentaires : </label>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <textarea class="textarea_settings" id="nom_sett" 
                        name="nom_sett" rows="12" cols="80"></textarea>
                </td>
            </tr>
        

            <tr><td colspan="5"><hr></td></tr>

            <tr>
                <td colspan="3" style="text-align: center;" >
                    <input class="submit_settings" id="valid_remarq_sett" 
                    type="submit" name="valid_remarq_sett" value="Enregistrer!"/>
                </td>
            </tr>

        </form>
        </table>
        <hr>
    </div>



<!-----------------------------   Notifications   ----------------------------->

    <button class="dropdown-btn">Notifications <i class="fa fa-caret-down"></i></button>
    <div class="dropdown_container-settings">
        
        <form method="POST">
        <table class="table_settings">
            <hr>

            <tr>
				<td colspan="2">
                    <input type="checkbox" id="OU_conditions" name="conditions"
                        checked>
                    <label for="OU_conditions">
                        J'accepte les terms et les conditions d'utilisation
                    </label>
				</td>
			</tr>
            <tr>
				<td colspan="2">
                    <input type="checkbox" id="notif_accord" name="notif_accord"
                        checked>
                    <label for="notif_accord">
                        J'accepte recevoir des notifications par mail et/ou par SMS
                    </label>
				</td>
			</tr>
        

            <tr><td colspan="5"><hr></td></tr>

            <tr>
                <td colspan="3" style="text-align: center;" >
                    <input class="submit_settings" id="valid_remarq_sett" 
                    type="submit" name="valid_remarq_sett" value="Enregistrer!"/>
                </td>
            </tr>

        </form>
        </table>
        <hr>
    </div>


</div>











<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>










</div>