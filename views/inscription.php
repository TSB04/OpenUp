<nav class="pop-wrap">
    
<div class="pop-content" >
    <h6><?=_INSC?></h6>
    <p><?=_NOTIF?></p>
<form method ="POST" action="" enctype = "multipart/form-data">
		<table>
			<tr>
				<td>
					<label><?=_ACC_TYPE?></label><br>
				</td>
				<td id="type_user_td">
					<select id="type_user_select" name="type">
						<option value="person" 
                            <?php if(($user->getUserType()) == 'person') 
                                {echo("selected");}?>>
                            Personnel
                        </option>
						<option value="profes" 
                            <?php if(($user->getUserType()) == 'profes') {
                                echo("selected");}?>>
                            Professionnel
                        </option>
					</select>
				</td>
			</tr>
                        <tr>
				<td>
					<label><?=_NOM?>:</label><br>
				</td>
				<td>
					<!-- On utilise l'attribut <value> pour pouvoir recuperer les 
					données déjà saisies, pour préremplir les champs si après la 
					tentative d'inscription y aura d'erreurs
					-->
					<input 	type="text" id="nom inputInscription" name="nom" 
						placeholder="<?=_NOM?>" autofocus
						required="" value="<?= $user->getUserNom(); ?>"><br>
				</td>
			</tr>
			
			<tr>
				<td>
					<label><?=_PRENOM?>:</label><br>
				</td>
				<td>
					<input 	type="text" id="prenom inputInscription" 
						name="prenom" placeholder="<?=_PRENOM?>" 
						value="<?= $user->getUserPrenom(); ?>"
						required="" ><br>
				</td>
			</tr>
			
			<tr>
				<td>
					<label><?=_NICK?>:*</label><br>
				</td>
				<td>
					<input 	type="text" id="pseudo inputInscription" name="pseudo" 
						value="<?= $user->getUserPseudo(); ?>"
						placeholder="covid20"
						required=""><br>
				</td>
			</tr>
			
			<tr>
				<td>
				<label><?=_MAIL?>:*</label><br>
				</td>
				<td>
					<input 	type="mail" name="mail" 
						placeholder="e-mail@mail.com" 
						value="<?= $user->getUserMail(); ?>"
						required=""><br>
				</td>
			</tr>
			
			<tr>
				<td>
				<label><?=_PASSWORD?>:*</label><br>
				</td>
				<td>
					<input type="password"
						name="mdp" placeholder="*******" required=""><br>
				</td>
			</tr>
			<tr>
				<td>
				<label><?=_CONFIRM_PASSWORD?>:*</label><br>
				</td>
				<td>
				<input type="password" name="mdp2" 
					placeholder="*******" required=""><br>
				</td>
			</tr>
            

            <tr>
		<td colspan="2">
                    <label for="remember_me"><?=_REMEMBER?></label>
                    <input type="checkbox" id="remember_me" name="remember_me"
                    checked="">
		</td>
                <td>
                    
                </td>
                
            </tr>
            <tr>
		<td colspan="2">
                    
                    <label for="OU_conditions">
                        J'accepte les terms et les conditions d'utilisation
                    </label>
                    <input type="checkbox" id="OU_conditions" name="conditions"
                        checked="">
		</td>
                <td>
                    
                </td>
            </tr>
            <tr>
			
                <td>
                    <label for="notif_accord">
                        J'accepte recevoir des notifications par mail et/ou par SMS
                    </label>
                    <input type="checkbox" id="notif_accord" name="notif_accord"
                        checked>
		</td>
                <td colspan="2">
                    
                </td>
			</tr>


            <tr style="text-align: center;">
				<td colspan="2" >
				<input id="btn-submit" type="submit" value="<?=_SUBMIT_INSC?>"  name="new_user">
				</td>
			</tr>

		</table>
    
	</form>

	
</div>
    <?php if($erreur != '') : ?>
		<div 	align="center" style="width: fit-content; 
				color: white; background-color: red; "><b>
				<!-- Afficher les reponses aux demandes -->
				_/!\__<?= $erreur ?>__/!\_</b>
		</div>
	<?php endif; ?>


</nav>