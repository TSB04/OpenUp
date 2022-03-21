<?php
//  Désactiver le rapport d'erreurs
error_reporting(1);
//  error_reporting(E_ALL);

// Desactive la limite de temps d'execution d'un traitement par PHP
ini_set('max_execution_time', 0);
//  Remplace le & situé apres la valeur de la session dans les url par le code html &amp;
ini_set('arg_separator.output', '&amp;');

//  Recuperation du  ## DOMAINE ##
$domaine = $_SERVER['HTTP_HOST'];
//  ## Administrateur ##  principal du site
define('MAIL_ADMIN' , '');
// Responsable technique du serveur
define('MAIL_WEBMASTER' , '');
//  Racine du site
define('URL_ROOT' , 'http://'.$domaine);


//  Definition du chemin d'accès      ## style CSS ##
define('PATH_CSS',URL_ROOT.'/public/css');

//  Definition du chemin d'accès      ## JAVASCRIPTS ## 
define('PATH_JS',URL_ROOT.'/public/JScripts');

//  Definition du chemin d'accès aux  ## MEDIA ##
//define('PATH_IMAGES',URL_ROOT.'/public/media');

//  Definition du chemin d'accès aux  ## IMAGES ##
define('PATH_IMAGES',URL_ROOT.'/public/media/images');

//  Definition du chemin d'accès aux  ## ICONES ##
define('PATH_ICONS',URL_ROOT.'/public/media/icons');

//  Definition du chemin d'accès aux  ## ICONES ##
define('PATH_FAV',URL_ROOT.'/public/media/favicon');

//  Definition du chemin d'accès aux  ## VIDEOS ##
define('PATH_VIDEO',URL_ROOT.'/public/media/videos');


//  Chemin d'accès aux fichiers des   ## ARTICLES ##
define('PATH_IMAGES_ARTICLE',REP_IMAGES.'/articles');

//  Definition du chemin d'accès aux  ## CLASSES ##
define('DIR_PHP_CLASS','models');

//  Configuration de la BDD



define('DATABASE_HOST' , 'wfulldjtsb.mysql.db');
define('DATABASE_TYPE' , 'MySQL');
define('DATABASE_NAME' , 'wfulldjtsb');
define('DATABASE_USERNAME' , 'wfulldjtsb');
define('DATABASE_PASSWORD' , 'Azerty123');