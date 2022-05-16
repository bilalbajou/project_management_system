require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.getElementById("btn_supprimer").addEventListener('click',()=>{
           let confim=confirm("Êtes-vous sûr de supprimer ce projet");
           if(confim){
                 document.getElementById("form_suppr").submit();
           }
})