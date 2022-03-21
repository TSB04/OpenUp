

<?php

/*
 * Class de gestion des utilisateurs
 *
 * @author Cristian Tirche
 */


class passeport {

/**                     INSCRIPTION PART START 
* --------------------------------------------------------------------------- */                   

    /** Variables UTILISATEUR */
    private $userId;
    private $userType;
    private $userPseudo;
    private $userNom;
    private $userPrenom;
    private $userMail;
    private $userPass;
    private $userOnline;
    private $userNaiss;
    private $userGenre;
    private $userAdresse;
    private $userCodePostal;
    private $userVille;
    private $userTelMobile;
    private $userTelFixe;
    private $userFax;
    private $userNotifMail;
    private $userNotifTel;
    private $userCreat;



public function getUserData() {
    session_start();

    global $BDD, $erreur;
    $userId = $_SESSION['userId'];

    $sql = "SELECT * FROM users WHERE userId = '$userId' ";

    $resultSet = $BDD->query($sql);

    $userInfo = $resultSet->fetch();
    
    
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


    /** Variables PASSEPORT */
    private $passId;
    private $serialPassId;
    private $passStatus;
    private $vaccineDose;
    private $passCreat;


public function getPasseData() {
    session_start();

    global $BDD, $erreur;
    $userId = $_SESSION['userId'];
    //var_dump ($userId);

    $sql = "SELECT * FROM `immuno_pass` WHERE `user_Id` = '$userId' ";
    $resultSet = $BDD->query($sql);
    $passInfo = $resultSet->fetch();


    $this->passId = $passInfo['passId'];
    $this->serialPassId = $passInfo['serialPassId'];
    $this->passStatus = $passInfo['passStatus'];
    $this->vaccineDose = $passInfo['vaccineDose'];
    $this->passCreat = $passInfo['passCreat'];
    $this->passDateValid = $passInfo['passDateValid'];


    $erreur = 0;
}

/** Recuperer le contenu des variables privées d'UTILISATEUR. */

public function getUserId() { return $this->userId; }

public function getUserType() { return $this->userType; }

public function getuserPseudo() { return $this->userPseudo; }

public function getPseudoLength() { return $this->pseudoLength; }

public function getUserNom() { return $this->userNom; }

public function getUserPrenom() { return $this->userPrenom; }

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






/** Recuperer le contenu des variables privées de PASSEPORT. */

public function getPassId() {
    return $this->passId;
}

public function getSerialPassId() {
    return $this->serialPassId;
}

public function getPassStatus() {
    return $this->passStatus;
}

public function getVaccineDose() {
    return $this->vaccineDose;
}

public function getPassCreat() {
    return $this->passCreat;
}

public function getPassValid() {
    return $this->passDateValid;
}



}
?>