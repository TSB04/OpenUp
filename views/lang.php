
<nav class="navigMenu">

<!-- Language -->
    <form method='post' action='' id='form_lang' >
    <?= _LANGUAGE ?>
        <select id="langues" name='lang' onchange='changeLang();' >

            <option class="en_lang" value='en' 
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ 
                echo "selected"; } ?> >EN
            </option>

            <option class="fr_lang" value='fr' 
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){
                echo "selected"; } ?> >FR
            </option>

            <option class="ro_lang" value='ro' 
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ro'){
                echo "selected"; } ?> >RO
            </option>

            <option class="ru_lang" value='ru' 
            <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ru'){ 
                echo "selected"; } ?> >РУ
            </option>

        </select>
    </form>

</nav>





<!-- ######################### SCRIPT ############################ -->

<script>
function changeLang(){
document.getElementById('form_lang').submit();
}
</script>

<!-- ************************ END SCRIPT ************************* -->