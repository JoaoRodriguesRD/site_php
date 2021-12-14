$(
    function(){
        $('nav.mobile').click(
            function(){
                var menu = $('nav.mobile ul');
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

                menu.slideToggle();
            }
        )
    }
)