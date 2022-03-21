<?php

/*
 * Class de gestion des utilisateurs
 *
 * @author Cristian Tirche
 */


class user {

/**                     INSCRIPTION PART START 
* --------------------------------------------------------------------------- */                   

    /** Variables d'inscription */
    private $userId;
    private $userType;
    private $userNom;
    private $userPrenom;
    private $userPseudo;
    private $userMail;
    private $userMdp;
    private $userTel;
    private $userDate;


/** On recupère les valeurs des <input> de notre formulaire d'inscription */
    public function setUserFromPost(){
        $userType = htmlspecialchars($_POST['type']);
        switch ($userType){
            case "person": $this->userType = "patient"; break;
            case "profes": $this->userType = "medecin"; break;
        }
        $this->userNom = htmlspecialchars($_POST['nom']);
        $this->userPrenom = htmlspecialchars($_POST['prenom']);
        $this->userPseudo = htmlspecialchars($_POST['pseudo']);
        $this->userMail = htmlspecialchars($_POST['mail']);
        $this->userTel = htmlspecialchars($_POST['tel']);
        $this->userDate = htmlspecialchars($_POST['naissance']);
        $this->userMdp = sha1($_POST['mdp']);
        $this->userMdp2 = sha1($_POST['mdp2']);

        $this->pseudoLength = strlen($this->userPseudo);
        $this->mdpLength = strlen($_POST['mdp']);

        $userMailExistVerify = $_POST['mail'];
    }

/** On ajoute les informations du nouvel utilisateur dans la BDD */
    public function addUserToDb(){
        global $BDD;

        $sql = "INSERT INTO users (userType, userPseudo, 
                                    userNom, userPrenom, 
                                    userMail, userPass)
                 VALUES ('$this->userType', '$this->userPseudo',
                        '$this->userNom', '$this->userPrenom',  
                        '$this->userMail', '$this->userMdp')";
        
        $BDD->query($sql);
        $erreur = "Votre compte a bien été crée";
    }

/** Fonction qui teste si le mail n'est pas déjà utilisé */
    public function userMailExist($userMailExistVerify){
        global $BDD, $erreur;

        $sql = "SELECT * FROM users WHERE userMail = '$userMailExistVerify'";

        $resultSet = $BDD->query($sql);
        $mailExist = $resultSet->fetch(PDO::FETCH_OBJ); 

        if($mailExist == ""){
            $erreur = 0;
        }
        else{
            $erreur = 1;
        }
        return $erreur;
    }

/** On teste si le pseudo n'est pas déjà pris par un autre utilisateur */
    public function userPseudoExist($userPseudoExistVerify){
        global $BDD, $erreur;

        $sql = "SELECT * FROM users WHERE userPseudo = '$userPseudoExistVerify'";

        $resultSet = $BDD->query($sql);
        $pseudoExist = $resultSet->fetch(PDO::FETCH_OBJ); 

        if($pseudoExist == ""){
            $erreur = 0;
        }
        else{
            $erreur = 1;
        }
        return $erreur;
    }
/**                     INSCRIPTION PART END 
* =========================================================================== */



/**                     CONNECTION PART START 
* --------------------------------------------------------------------------- */

/** Variables de connexion */
private $mailConnect;
private $mdpConnect;

/** On recupère les données du formulaire de connexion */
public function setConectFromPost(){
    $this->mailConnect = htmlspecialchars($_POST['mailConnect']);
    $this->mdpConnect = sha1($_POST['mdpConnect']);

}



/** On teste si le pseudo n'est pas déjà pris par un autre utilisateur */
public function checkUserExist(){
    global $BDD, $erreur;

    $sql = "SELECT * FROM users WHERE userMail = '$this->mailConnect' AND userPass = '$this->mdpConnect'";

    $resultSet = $BDD->query($sql);

    //$userExist = $resultSet->fetch(PDO::FETCH_OBJ);
    $userExist = $resultSet->rowCount();
/*
cristi@g.com
pass123
*/

    if( $userExist != "" && $userExist != null && $userExist == 1 ){
        
        $userInfo = $resultSet->fetch();

        session_start();

        $_SESSION['userId'] = $userInfo['userId'];
        $_SESSION['pseudo'] = $userInfo['userPseudo'];
        //$_SESSION['userId'] = 2000;
        //var_dump($_SESSION);


        $this->userId = $userInfo['userId'];
        $this->userType = $userInfo['userType'];
        $this->userPseudo = $userInfo['userPseudo'];
        $this->userNom = $userInfo['userNom'];
        $this->userPrenom = $userInfo['userPrenom'];
        $this->userMail = $userInfo['userMail'];
        $this->userPass = $userInfo['userPass'];
        $this->userOnline = $userInfo['userOnline'];
        $this->userNaiss = $userInfo['userNaiss'];
        $this->userGenre = $userInfo['userGenre'];
        $this->userAdresse = $userInfo['userAdresse'];
        $this->userCodePostal = $userInfo['userCodePostal'];
        $this->userVille = $userInfo['userVille'];
        $this->userPays = $userInfo['userPays'];
        $this->userTelMobile = $userInfo['userTelMobile'];
        $this->userTelFixe = $userInfo['userTelFixe'];
        $this->userFax = $userInfo['userFax'];
        $this->userNotifMail = $userInfo['userNotifMail'];
        $this->userNotifTel = $userInfo['userNotifTel'];
        $this->userCreat = $userInfo['userCreat'];

        $erreur = 0;
    }
    elseif($userExist != "" && $userExist != null && $userExist > 1){
        $erreur = 850; // Plusieurs comptes ont le meme mail ou/et mdp
    }
    else{
        $erreur = 1;
    }


    //return $erreur;
}



/**                     CONNECTION PART END 
* =========================================================================== */



/**                     DECONNECTION PART START 
* --------------------------------------------------------------------------- */
public function deconnexionUser(){
    session_start();
    $_SESSION = array();    // Détruit toutes les variables de session
    //session_destroy();
    //echo('deconnexion réussie');
}

/**                     DECONNECTION PART END 
* =========================================================================== */



/** Recuperer le contenu des variables privées. */
public function getUserId() {
    return $this->userId;
}

public function getUserType() {
    return $this->userType;
}

public function getuserPseudo() {
    return $this->userPseudo;
}

public function getPseudoLength() {
    return $this->pseudoLength;
}

public function getUserNom() {
    return $this->userNom;
}

public function getUserPrenom() {
    return $this->userPrenom;
}

public function getUserMail() {
    return $this->userMail;
}

public function getUserMdp() {
    return $this->userMdp;
}

public function getUserMdp2() {
    return $this->userMdp2;
}

public function getMdpLength() {
    return $this->mdpLength;
}

public function getUserOnline() {
    return $this->userOnline;
}

public function getUserNaiss() {
    return $this->userNaiss;
}

public function getUserGenre() {
    return $this->userGenre;
}

public function getUserAdresse() {
    return $this->userAdresse;
}

public function getUserCodePostal() {
    return $this->userCodePostal;
}

public function getUserVille() {
    return $this->userVille;
}

public function getUserPays() {
    return $this->userPays;
}

public function getUserTelMobile() {
    return $this->userTelMobile;
}

public function getUserTelFixe() {
    return $this->userTelFixe;
}

public function getUserFax() {
    return $this->userFax;
}

public function getUserNotifMail() {
    return $this->userNotifMail;
}

public function getUserNotifTel() {
    return $this->userNotifTel;
}

public function getUserCreat() {
    return $this->userCreat;
}


}
?>