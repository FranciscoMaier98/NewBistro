


//var body = document.body, html = document.documentElement;

//var height = Math.max( body.scrollHeight, body.offsetHeight, 
//    html.clientHeight, html.scrollHeight, html.offsetHeight );

var wind = ($(window).height()-20);

var navbar = $("#css-navbar");
var navbarCollapse = $('nav #navbarCollapse');
var carousel_Image = $('.carousel-item');



$('a#selecionarItem').click(function(e) {
    e.preventDefault();
    
    console.log($(this).val());

    var id = $(this).val();


    $.ajax({
        url: '{{route("site.menuSelect")}}',
        type: 'get',
        dataType: 'json',
        contentType: 'application/json',
        data: {
            'id': id
        }
    }).done(function(data){
        console.log(data);
    });
});



/*
$(function(){

    $('p[class="item-category-p"]').click(function(event){
        event.preventDefault(); //previne um evento padrão. Nesse caso, NÃO atualiza a página

        //console.log($(this).serialize());

        $.ajax({
        
            url: "{{route('site.menuSelect')}}",
            type: "get",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success === true) {
                    console.log("funcionou");
                    //redirecionar
                } else {
                    $('.messageBox').removeClass('d-none').html(response.message); //informa a mensagem de erro
                }
            }
        
        });



    });
});
*/

/*$(window).on('scroll', function(){
    var scrollTop = $(this).scrollTop(); 
    //nav.css({'opacity': 0.8});
    


    if(scrollTop <= (wind-150)) {
        navbar.css({'opacity': 0.95 , 'border-radius': 0 , 'margin': 0});
        navbarCollapse.css({'opacity': 0.95 , 'border-radius':0});

        
        //navbar.css('background-color', 'rgba(255, 255, 255, 1.0)');
        //navbarCollapse.css('background-color', 'rgba(165, 42, 42, 1.0)');
    } 
    else {
        navbar.css({'opacity': 0.85, 'border-radius':20, 'margin': 20});
        navbarCollapse.css({'opacity': 0.85 , 'border-radius':20});


        //navbar.css('background-color', 'rgba(255, 255, 255, 0.8)');
        //navbarCollapse.css('background-color', 'rgba(165, 42, 42, 0.8)');
    }
});*/

