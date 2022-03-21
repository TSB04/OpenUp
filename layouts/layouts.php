<!DOCTYPE html>
<html lang="fr">
<head>
    <title>OpenUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <link rel="stylesheet" href="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
     
    <link rel="icon" type="img/icon" href="<?=PATH_ICONS?>/openup.png" />
    
    <link rel="stylesheet" href="<?=PATH_CSS?>/accueil_style.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/animate.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/">
    <link rel="stylesheet" href="<?=PATH_CSS?>/flaticon.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/style.css">
    <link rel="stylesheet" href="<?=PATH_CSS?>/popin.css">
</head>

<body id="body" class="border">

    <header  class="anim border">
        <?php  //On appelle le HEADER
            include_once 'layouts/header.php';
        ?>
    </header>

    <main  class="anim border">
        <?php   //On appelle le controlleur de la PAGE ACTUELLE
            include_once 'controllers/'.$pageName;
        ?>  
    </main>

    <footer  class="anim border">
        <?php  //On appelle le FOOTER
            include_once 'layouts/footer.php'
        ?>
    </footer>
    
    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=PATH_JS?>/menu-sm.js"></script>
  <script src="<?=PATH_JS?>/menu-sm2"></script>
  <script src="<?=PATH_JS?>/"></script>
    
  <script src="<?=PATH_JS?>/jquery.min.js"></script>
  <script src="<?=PATH_JS?>/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=PATH_JS?>/popper.min.js"></script>
  <script src="<?=PATH_JS?>/bootstrap.min.js"></script>
  <script src="<?=PATH_JS?>/jquery.easing.1.3.js"></script>
  <script src="<?=PATH_JS?>/jquery.waypoints.min.js"></script>
  <script src="<?=PATH_JS?>/jquery.stellar.min.js"></script>
  <script src="<?=PATH_JS?>/owl.carousel.min.js"></script>
  <script src="<?=PATH_JS?>/jquery.magnific-popup.min.js"></script>
  <script src="<?=PATH_JS?>/jquery.animateNumber.min.js"></script>
  <script src="<?=PATH_JS?>/scrollax.min.js"></script>
  <script src="<?=PATH_JS?>/google-map.js"></script>
  <script src="<?=PATH_JS?>/main.js"></script>
    

</body>

</html>

