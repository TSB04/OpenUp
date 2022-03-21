
<?php 

session_start();

$user = new user();



$user_deconnect = $_POST['user_deconnect'];

if(isset($user_deconnect)){
    $user->deconnexionUser();
    header("Location: http://3wfulldev.com/");
    exit();
}


?>