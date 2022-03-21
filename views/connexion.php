<nav class="pop-wrap">
    <div class="pop-content">
    
    <h6>Connexion</h6>

    <form method="POST" action="" nctype = "multipart/form-data">
    
        <input id="mailconnect" type="email" name="mailConnect" placeholder="<?=_MAIL?>"  autocomplete="on"/>
        <input id="mdpconnect" type="password" name="mdpConnect" placeholder="<?=_PASSWORD?>"  autocomplete="on"/>
        <br/>
        <div id="dx-1"style="text-align: center;">
        <input id="btn-submit"  type="submit" name="form_connect" value="<?=_SUBMIT_CONN?>" />
        </div>
    </form>
</div>
</nav>



<?php
if(isset($erreur)) {
   echo '<font color="red">'.$erreur.'</font>';
  
}
elseif(isset($alert)) {
   echo '<font color="red">'.$alert.'</font>';
  
}
?>
