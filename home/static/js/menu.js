$(
    function(){
        $('nav.mobile').click(
            function(){
                var menu = $('nav.mobile ul');
                var icon = $('.mobile-button').find('i');
                // if(menu.is(':hidden')== true){
                //     menu.css('display','block');
                // }else{
                //     menu.css('display','none');
                // }
                
                // if(menu.is(':hidden')== true){
                //     menu.show();
                // }else{
                //     menu.hide();
                // }

                // if(menu.is(':hidden')== true){
                //     menu.fadeIn();
                // }else{
                //     menu.fadeOut();
                // }

                //Alterar icone do menu (removendo e adicionando outro icone na tag i do botao)
                if(menu.is(':hidden')== true){
                    menu.slideToggle();
                    icon.removeClass('fas fa-bars');
                    icon.addClass('fas fa-angle-down');
                }else{
                    icon.removeClass('fas fa-angle-down');
                    icon.addClass('fas fa-bars');
                    menu.slideToggle();
                }
            }
        )
    }
)