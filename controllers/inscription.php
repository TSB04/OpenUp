<?php 
$user = new user();


$user_inscript = $_POST['new_user'];

if(isset($user_inscript)){
    $user = new user();
    $user->setUserFromPost();
    
    /** On vérifie que les champs obligatoires du formulaire ne sont pas
    *   vidéos
    */
    if( !empty($_POST['nom']) AND !empty($_POST['prenom']) AND 
        !empty($_POST['mail']) AND 
        !empty($_POST['mdp']) AND 
        !empty($_POST['mdp2'])){
        
        /** On vérifie que le PSEUDO et le Mot de passe respectent les normes */
        if($user->getPseudoLength() <= 255 AND $user->getMdpLength() <= 24){

            /*** On utilise le Filtre de mail pour verifier si le mail
             * correspond au format, et le champ du formulaire contenant
             * l'addresse mail n'a pas soumis des modifications afin
             * d'empecher les données fauses en utilisant l'ispection
             * du code-source dans le navigateur */
            $userMailFilter = $user->getUserMail();

            if(filter_var($userMailFilter, FILTER_VALIDATE_EMAIL)){
                // On récupère le mail et le pseudo pour vérifier leur
                // unicité dans la BDD
                $userMailExistVerify = $_POST['mail'];
                $userPseudoExistVerify = $_POST['pseudo'];
                // Appel à la fonction pour tester si le mail n'exixte pas déjà
                // dans la BDD
                $user->userMailExist($userMailExistVerify);
                
                if($erreur == 0){
                    // Appel à la fonction pour tester si le pseudo n'est pas 
                    // déjà utilisé
                    $user->userPseudoExist($userPseudoExistVerify);
                    if($erreur == 0){
                        // On vérifie que les deux mots de passe sont identiques
                        if($user->getUserMdp() == $user->getUserMdp2()){
                                $user->addUserToDb();
                                $erreur = "Inscription réussie!!";
                                header("Location: http://3wfulldev.com/");
                                   exit();
                                // A ce niveau, on a bien enregistré toutes les 
                                // données du nouveau utilisateur dans notre
                                // base de données
                            }
                        else{
                            $erreur = "Vos mots de passe ne correspondent pas!\n";
                        }
                    }
                    else{
                        $erreur = "Pseudo déjà utilisé!";
                    }
                }

                else{
                    $erreur = "Mail déjà utilisé!";
                }
            }
            else{
                $erreur = "Votre addresse mail n'est pas valide!";
            }
        }
        elseif($pseudoLength > 255){
            $erreur = "Votre pseudo ne doit pas depasser 255 caractères!\n";
        }
        elseif($mdpLength > 24){
            $erreur = "Votre mot de passe ne doit pas depasser 24 caractères!\n";
        }
    }
}


include_once 'views/inscription.php';

?>