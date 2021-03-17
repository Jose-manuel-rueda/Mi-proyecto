$(document).ready(function(){
    var botones = $('button');
    botones.css('width', '100px')
           .css('height', '100px') 
           .css('border-radius', '999px')
           .css('font-weight', 'bold')
           .css('background','gray')
           .css('font-size', '20px');
    botones.mousedown(function(){
        botones.css('border','none')
               
    })      
    botones.mouseup(function(){
        botones.css('border','none')
                
    })      



    $('#mostrar').hide();
    $('#ocultar').click(function(){
        $(this).hide();
        $('#mostrar').show();
        $('.caja').fadeTo('slow',0.4);
        // $('.caja').fadeOut('slow');
    })
    $('#mostrar').click(function(){
        $(this).hide();
        $('#ocultar').show();
        $('.caja').fadeTo('slow',1);
        // $('.caja').fadeIn('slow');

    })
    // $('#todoEnUno').click(function(){
    //     console.log($(this))
        
    //     // $('#0').show();
    //     $('.caja').toggle();
       
    // })
    $('#todoEnUno').click(function(){
        
        $('.caja').animate({
                            marginLeft:'1110px',
                            marginTop:'110px'

                            },'slow')
                  .animate({
                            transform:'rotate(50deg)',
                            marginLeft:'0px',
                            marginTop:'0px'
                            },'slow')
        $('.caja').animate({
                            marginLeft:'1110px',
                            marginTop:'110px'

                            },'slow')
                  .animate({
                            transform:'rotate(50deg)',
                            marginLeft:'0px',
                            marginTop:'0px'
                            },'slow')
        $('.caja').animate({
                            marginLeft:'1110px',
                            marginTop:'110px'

                            },'slow')
                  .animate({
                            transform:'rotate(50deg)',
                            marginLeft:'0px',
                            marginTop:'0px'
                            },'slow')
       
    })







});