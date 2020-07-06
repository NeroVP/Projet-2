(function($){
   
    $('.addPanier').click(function(event){
        event.preventDefault();
        $.get($(this).attr('href'),{},function(data){
            if(data.error){
                alert(data.message)
            }else{
                if(confirm(data.message + '. Voulez-vous accéder à votre panier ?')){
                    window.location.replace('http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/panier.php')
                } 
            }
        },'json');
        return false;
    })

})(jQuery);

