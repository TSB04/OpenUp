document.addEventListener('DOMContentLoaded', function(){ 
    var popin = document.getElementById('popin-inscription');
    var inscription = document.getElementById('creatUser');
    var annuler = document.getElementById('btn-annuler');
    
    
    inscription.addEventListener('click',openPopin);
    annuler.addEventListener('keypress',closePopin);
    
    function openPopin(){
        popin.style.display = "block";
    }

    function closePopin(){
        popin.style.display = "none";
    }

    }, false);