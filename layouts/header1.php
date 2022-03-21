
<?php   
session_start();

include_once 'controllers/deconnexion.php';


/** On vérifie si il y a une SESSION UTILISATEUR */
if ($_SESSION['userId'] > 0){ ?>

<div class="topmenu">

    <div class="main_nav">
        <ul class="topmenu_list">
            <li>
                <div class="topmenu_logo">
                    <a href="accueil"  >
                        <img src="<?=PATH_ICONS?>/favicon.ico" alt="OpenUp LOGO"
                            id="topmenu_img_logo">
                    </a>
                </div>
            </li>
            <li>
                <a href="accueil" 
                    class="topmenu_btn 
                    <?php if ($page == "accueil"){
                        echo ('active_page');}?>">
                    Accueil
                </a>
            </li>
            <li>
                <a href="messenger" 
                    class="topmenu_btn 
                    <?php if ($page == "messenger"){
                        echo ('active_page');}?>">
                    Messenger
                </a>
            </li>
            <li>
                <a href="actualites" 
                    class="topmenu_btn 
                    <?php if ($page == "actualites"){
                        echo ('active_page');}?>">
                    Actualités
                </a>
            </li>
            <li>
                <a href="evenements" 
                    class="topmenu_btn 
                    <?php if ($page == "evenements"){
                        echo ('active_page');}?>">
                    Evénements
                </a>
            </li>
            <li>
                <a href="about" 
                    class="topmenu_btn 
                    <?php if ($page == "about"){
                        echo ('active_page');}?>">
                    About
                </a>
            </li>
            <li>
                <a href="contact" 
                    class="topmenu_btn 
                    <?php if ($page == "contact"){
                        echo ('active_page');}?>">
                    Contact
                </a>
            </li>
            <li>
                <a href="edit"
                    class="topmenu_btn 
                    <?php if ($page == "edit"){
                        echo ('active_page');}?>">
                    Editer mon profil
                </a>
            </li>
            <li>
                <div>
                    <form method ="POST" enctype = "multipart/form-data">
                        <input type="submit" value="Deconnexion" 
                                name="user_deconnect">
                    </form>
                </div>
                
            </li>

        </ul>
    </div>

    <div class="search_container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>



<?php }

/** PAS de SESSION - aucun utilisateur connécté */
else { ?>

<div class="topmenu">
    <div class="main_nav">
        <ul class="topmenu_list">
            <li>
                <div class="topmenu_logo">
                    <a href="accueil"  >
                        <img src="<?=PATH_ICONS?>/favicon.ico" alt="OpenUp LOGO"
                            id="topmenu_img_logo">
                    </a>
                </div>
            </li>
            <li>
                <a href="accueil" 
                    class="topmenu_btn 
                    <?php if ($page == "accueil"){
                        echo ('active_page');}?>">
                    Accueil
                </a>
            </li>
            <li>
                <a href="actualites" 
                    class="topmenu_btn 
                    <?php if ($page == "actualites"){
                        echo ('active_page');}?>">
                    Actualités
                </a>
            </li>
            <li>
                <a href="about" 
                    class="topmenu_btn 
                    <?php if ($page == "about"){
                        echo ('active_page');}?>">
                    About
                </a>
            </li>
            <li>
                <a href="contact" 
                    class="topmenu_btn 
                    <?php if ($page == "contact"){
                        echo ('active_page');}?>">
                    Contact
                </a>
            </li>


            <li>
                <a href="inscription" 
                    class="topmenu_btn inscri
                    <?php if ($page == "inscription"){
                        echo ('active_page');}?>">
                    Inscription
                </a>
            </li>
            <li>
                <a href="connexion" 
                    class="topmenu_btn connex
                    <?php if ($page == "connexion"){
                        echo ('active_page');}?>">
                    Connexion
                </a>
            </li>

        </ul>
    </div>
</div>

<?php } ?>


SESSION[userId]: <?= $_SESSION['userId']; ?>
