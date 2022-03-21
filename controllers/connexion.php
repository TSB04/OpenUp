

<?php
//session_start();
$user_connect = $_POST['form_connect'];

if(isset($user_connect)){
    $user = new user();
    $user->setConectFromPost();

    if( !empty($_POST['mailConnect']) AND !empty($_POST['mdpConnect']) ) {
        $user->checkUserExist();
        $erreur = 0;

        if($erreur == 0) {
            
            $alert = "Connexion réussie !>";
            $erreur = 0;
            header("Location: https://index.php");
            exit();
        }
        
        else {
            $alert = "Mauvais mail ou mot de passe !";
            $erreur = "Failled to connect";
        }
    }
    else {
        $alert = "Tous les champs doivent être complétés !";
        
    }
}

//echo $erreur;
//echo $alert;
?>


<?php
    include_once 'views/connexion.php';
?>

