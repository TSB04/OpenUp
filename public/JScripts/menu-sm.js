document.addEventListener('DOMContentLoaded', function(){ 
    var open = document.getElementById('menu-bars-menu');
    var menu = document.getElementsByClassName('menu-bars-hid');
    
    
    open.addEventListener('click',openMenu);
    
    function openMenu(){
        menu.style.display = "block";
    }

    

    }, false);