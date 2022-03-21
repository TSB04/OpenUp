
<?php



if (isset($_SESSION['userId'])) {

    $user = new passeport();
    $user->getUserData();


    $passeport = new passeport();
    $passeport->getPasseData();

    include_once 'views/immunopass.php';

}
else{
    include_once 'controllers/nopermission.php';
}
?>




