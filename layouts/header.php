

    <!----------------------------- Top Info Bar Ends ------------------------------------>
	

<?php   
session_start();

include_once 'controllers/deconnexion.php';


/** On vérifie si il y a une SESSION UTILISATEUR */
if ($_SESSION['userId'] > 0){
?>

<!----------------------------- Navigation bar Starts -------------------------------->
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
             <span class="language">
                    <?=
                        require_once 'controllers/lang.php';
                        include_once 'controllers/lang.php';
                     ?>
                </span>
	    <div class="container">
                <a class="navbar-brand" id="logo" href="accueil"><img src="<?=PATH_ICONS?>/Openup.max.png" alt="OpenUp" /></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	      </button>
                
              

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a href="accueil" 
                        class="nav-link
                        <?php if ($page == "accueil"){
                        echo ('active_page');}?>">
                        <?=_HOME?></a>
                    </li>
                  
                    <li class="nav-item">
                      <a href="about" 
                        class="nav-link 
                        <?php if ($page == "about"){
                        echo ('active_page');}?>">
                        <?=_ABOUT?></a>
                    </li>
                  
                    <li class="nav-item">
                            <a href="actualites" 
                    class="nav-link
                    <?php if ($page == "actualites"){
                        echo ('active_page');}?>">
                            <?=_NEWS?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="blog" 
                           class="nav-link
                           <?php if ($page == "blog"){
                            echo ('active_page');}?>">
                            <?=_FORUM?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="COVID-19"
                           class="nav-link
                           <?php if ($page == "COVID-19"){
                            echo ('active_page');}?>">
                            <?=_COVID19?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="services"
                           class="nav-link
                           <?php if ($page == "services"){
                        echo ('active_page');}?>">
                            <?=_SERVICES?></a>
                    </li>
                    
                    <li class="nav-item">
                        
                            <a href="contact" 
                    class="nav-link
                    <?php if ($page == "contact"){
                        echo ('active_page');}?>">
                            <?=_CONTACT?></a>
                    </li>
                    <li class="nav-item" id="icon-user">
                        <span  class="icon-user" ><i class="fa fa-user fa-2x" style="color:#76FBCC"></i><span class="pseudo"><?= $_SESSION['pseudo']; ?></span></span>
                        
                        </a>
                            <ul class="hidden"> 
                                <li class="items-hidden">
                                    <a href="settings" class="icon-user-item" id="menu-px-1">
                                    <?=_SETTINGS?></a>
                                </li>
                                <li class="items-hidden">
                                    <a href="immunopass" class="icon-user-item" id="menu-px-2"
                                    <?php if ($page == "immunopass"){
                                    echo ('active_page');}?>">
                                    <?=_PASSP?></a>
                                </li>
                                <li class="items-hidden">
                                    <form method ="POST" action="accueil" enctype="multipart/form-data"  class="items-hidden">
                                        <!-- comment <a h type="submit" value="Deconnexion" 
                                        name="user_deconnect">-->
                                        <a class="nav-link">
                                            <input type="submit" value="<?=_LOG_OFF?>" name="user_deconnect" class="nav-link" id="btn-deconnexion">
                                             </a>
                                    </form>
                                </li>            
                            </ul>
                    </li>
	        </ul>
	    </div>
                <div class="menu-bars"> 
                <ul>
                        <li class="menu-bars-menu"><span ><i class="fas fa-bars fa-2x"></i></span>
                            <ul class="menu-bars-hid">
                                <li class="menu-bars-item"><a class="icon-a" href="accueil"><i class="fas fa-home"></i><?=_HOME?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="about"><i class="fas fa-cloud"></i><?=_ABOUT?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="actualites"><i class="fas fa-newspaper"></i><?=_NEWS?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="blog"><i class="fas fa-blog"></i><?=_FORUM?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="COVID-19"><?=_COVID19?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="services"><i class="fab fa-servicestack"></i><?=_SERVICES?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="contact"><i class="far fa-id-card"></i><?=_CONTACT?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" ><i class="fas fa-user"></i><span class="pseudo"><?= $_SESSION['pseudo']; ?></span></a>
                                    <ul class="sous-menu-bars-hid">
                                        <li class="sous-menu-bars-item"><a class="icon-b" href="settings"><?=_SETTINGS?></a></li>
                                        <li class="sous-menu-bars-item"><a class="icon-b" href="immunopass"><?=_PASSP?></a></li>
                                        <li class="sous-menu-bars-item">
                                             <form method ="POST" action="accueil" enctype="multipart/form-data" class="deconnexion">
                                            <!-- comment <a h type="submit" value="Deconnexion" 
                                            name="user_deconnect">-->
                                              
                                                    <input type="submit" value="<?=_LOG_OFF?>" name="user_deconnect" id="btn-deconnexion">
                                                
                                            </form>
                                        </li>       
                                    </ul>

                                </li>                    
                            </ul>
                    </li>
                 </ul>        
            </div>    
	</div>      
    </nav>
    <!------------------------------- Navigation bar Ends ------------------------------>
    
    
  
<?php }

/** PAS de SESSION - aucun utilisateur connécté */
else { ?>
    <!----------------------------- Navigation bar Starts -------------------------------->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">



















            <span class="language">
                    <?=
                        require_once 'controllers/lang.php';
                        include_once 'controllers/lang.php';
                     ?>
            </span>





























	    <div class="container">
                <a class="navbar-brand" id="logo" href="accueil"><img src="<?=PATH_ICONS?>/Openup.max.png" alt="OpenUp" /></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> 
	      </button>
                

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a href="accueil" 
                        class="nav-link
                        <?php if ($page == "accueil"){
                        echo ('active_page');}?>">
                        <?=_HOME?></a>
                    </li>
                  
                    <li class="nav-item">
                      <a href="about" 
                        class="nav-link 
                        <?php if ($page == "about"){
                        echo ('active_page');}?>">
                        <?=_ABOUT?></a>
                    </li>
                  
                    <li class="nav-item">
                            <a href="actualites" 
                    class="nav-link
                    <?php if ($page == "actualites"){
                        echo ('active_page');}?>">
                            <?=_NEWS?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="blog" 
                           class="nav-link
                           <?php if ($page == "blog"){
                            echo ('active_page');}?>">
                            <?=_FORUM?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="COVID-19"
                           class="nav-link
                           <?php if ($page == "COVID-19"){
                            echo ('active_page');}?>">
                            <?=_COVID19?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="services"
                           class="nav-link
                           <?php if ($page == "services"){
                        echo ('active_page');}?>">
                            <?=_SERVICES?></a>
                    </li>
                    
                    <li class="nav-item">
                        
                            <a href="contact" 
                    class="nav-link
                    <?php if ($page == "contact"){
                        echo ('active_page');}?>">
                            <?=_CONTACT?></a>
                    </li>
                    <li class="nav-item" id="icon-user">
                        <span  class="icon-user" ><i class="fa fa-user fa-2x" style="color:#76FBCC"></i></span>
                            <ul class="hidden">
                                <li class="items-hidden">
                                    <a href="inscription"  id="createUser" class="icon-user-item
                                       <?php if ($page == "inscription"){
                                        echo ('active_page');}?>">
                                            <?=_JOIN?></a>
                                        
                                </li>   
                                <li class="items-hidden">
                                    <a href="connexion" id="Connexion" class="icon-user-item
                                       <?php if ($page == "connexion"){
                                        echo ('active_page');}?>">
                                    <?=_LOG_IN?></a>
                                </li>                                           
                            </ul>      
                    </li
                </ul>
            </div>
            <div class="menu-bars"> 
                <ul>
                    <li class="menu-bars-menu"><span ><i class="fas fa-bars fa-2x"></i></span>
                            <ul class="menu-bars-hid">
                                <li class="menu-bars-item"><a class="icon-a" href="accueil"><i class="fas fa-home"></i><?=_HOME?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="about"><i class="fas fa-cloud"></i><?=_NEWS?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="actualites"><i class="fas fa-newspaper"></i><?=_NEWS?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="blog"><i class="fas fa-blog"></i><?=_FORUM?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="COVID-19"><?=_COVID19?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="services"><i class="fab fa-servicestack"></i><?=_SERVICES?></a></li>
                                <li class="menu-bars-item"><a class="icon-a" href="contact"><i class="far fa-id-card"></i><?=_CONTACT?></a></li>
                                <li class="menu-bars-item"><i class="fas fa-chevron-left"></i><span class="icon-a" href=""><i class="fas fa-user"></i><?=_ACCOUNT?></span>
                                    <ul class="sous-menu-bars-hid">
                                        <li class="sous-menu-bars-item"><a class="icon-b" href="connexion"><?=_LOG_IN?></a></li>
                                        <li class="sous-menu-bars-item"><a class="icon-b" href="inscription"><?=_JOIN?></a> </li>
                                    </ul>

                                </li>                    
                            </ul>
                    </li>
                 </ul>        
            </div>    
        </div>
    </nav>    
   
    
      

<?php } ?>

    



