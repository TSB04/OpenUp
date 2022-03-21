
<?php
session_start();

if(isset($_POST['lang']) && !empty($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];
}

if(isset($_SESSION['lang'])) {
    include "lang_".$_SESSION['lang'].".php";
    }
else {
    include "lang_en.php";
}




include_once 'views/lang.php';

?>