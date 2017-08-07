/*Boutton scrollTop: remonter en haut de page*/
$(document).ready(function(){
    $(function(){
        $("#monBouton").click(function(){
            $("html, body").animate({scrollTop: 0},"slow");
        });
    });
});


