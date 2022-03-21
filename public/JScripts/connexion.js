document.addEventListener('DOMContentLoaded', function(){ 
    var popin = document.getElementById('popin-connexion');
    var connexion = document.getElementById('connexion');
    var annuler = document.getElementById('btn-annuler');
    
    
    connexion.addEventListener('click',openPopin);
    annuler.addEventListener('keypress',closePopin);
    
    function openPopin(){
        popin.style.display = "block";
    }

    function closePopin(){
        popin.style.display = "none";
    }

    }, false);