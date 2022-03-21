<?php

// Recupération du fichier de configuration du site.
require_once 'config/conf.inc.php';

// Recupération du fichier d'appel automatique des classes PHP
require_once 'config/autoload.php';

// Recupération de l'URI du site pour le parsser et récupérer la page à afficher et les variables
$url = $_SERVER['REQUEST_URI'];

// Démarrage de la ## CONNEXION DB ##
$BDD = new DbTools();

$pageInfos = explode('/',$url);

$page = $pageInfos[1];
$urlId = (isset($pageInfos[2]))? $pageInfos[2] : null;


/**
 *  Construction du nom de la page à afficher
 *  Si $page est null on affiche la page d'accueil du site
 */ 
$pageName = ($page != '')? $page.'.php' : 'accueil.php';

if(file_exists('controllers/'.$pageName)){
    include_once 'layouts/layouts.php';
    include_once 'controllers/'.$pageName;
}
else{
    include_once 'layouts/layouts.php';
    include_once 'views/page404.php';
    //include_once 'controllers/accueil.php';
}

// Démarrage de la session
session_start();