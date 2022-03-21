/**Popin de connexion  */

function openPopin(){

    //On crée un objet XMLHttpRequest
    var ajax = new XMLHttpRequest();
     //On initialise notre requête avec open()
    
    ajax.onload = function(){
     if (ajax.status == 200){
         var reponse = ajax.response;
         document.getElementById('popin-connexion').innerHTML = reponse;
         console.log(reponse);
     } 
     else{
         console.log('Impossible d\'douvrir la  popin de connexion !');
     }
   }
    var url = 'connexion'//url que vous souhaitez transmettre au serveur web. Ici on demande la page 'ajax'.
    ajax.open("GET", url, true);
    //On envoie la requête
    ajax.send();
    
}


function closePopin(){

    //On crée un objet XMLHttpRequest
    var ajax = new XMLHttpRequest();
     //On initialise notre requête avec open()
    
    ajax.onload = function(){
     if (ajax.status == 200){
         var reponse = ajax.response;
         document.getElementById('popin-connexion').innerHTML = reponse;
         console.log(reponse);
     } 
     else{
         console.log('Impossible de fermer la popin de connexion  !');
     }
   }
    var url = 'connexion'//url que vous souhaitez transmettre au serveur web. Ici on demande la page 'ajax'.
    ajax.open("GET", url, true);
    //On envoie la requête
    ajax.send();
}


/**Popin d'inscription  */

    function openPopin()
    {
            //On crée un objet XMLHttpRequest
    var ajax = new XMLHttpRequest();
    //On initialise notre requête avec open()
   
   ajax.onload = function(){
    if (ajax.status == 200){
        var reponse = ajax.response;
        document.getElementById('popin-inscription').innerHTML = reponse;
        console.log(reponse);
    } 
    else{
        console.log('Impossible d\'ouvrir la  popin d\'inscription !');
    }
  }
   var url = 'inscription'//url que vous souhaitez transmettre au serveur web. Ici on demande la page 'ajax'.
   ajax.open("GET", url, true);
   //On envoie la requête
   ajax.send();

}


function closePopin()
{
        //On crée un objet XMLHttpRequest
        var ajax = new XMLHttpRequest();
        //On initialise notre requête avec open()
       
       ajax.onload = function(){
        if (ajax.status == 200){
            var reponse = ajax.response;
            document.getElementById('popin-inscription').innerHTML = reponse;
            console.log(reponse);
        } 
        else{
            console.log('Impossible de fermer la popin d\'inscription  !');
        }
      }
       var url = 'inscription'//url que vous souhaitez transmettre au serveur web. Ici on demande la page 'ajax'.
       ajax.open("GET", url, true);
       //On envoie la requête
       ajax.send();
}