$(document).ready(function(){

    //  Mouse Over y MouseOut

    var caja = $('.caja');
    var that = $(this);
    // caja.mouseover(function(){

    //     $(this).css('background-color' , 'red')

    // })
    // caja.mouseout(function(){

    //     $(this).css('background-color' , 'darkslategrey')

    // })

    // Hover


    function over(){
        $(this).css('background-color' , 'red')
    }
    function out(){
        $(this).css('background-color' , 'darkslategrey')
    }


    caja.hover(over,out)

    // Click y doble click

    caja.click(function(){

        $(this).css('background-color', 'yellowgreen')


    })
    caja.dblclick(function(){

        $(this).css('background-color', 'white')


    })

    // Focus y blur

    var dato = $('input').focus(function(){
        $(this).css('border','5px dashed red')
        
    });
    var dato2 = $('input').blur(function(){
        $(this).css('border','0')
        var datos = $(this).val();
        var caja3 = $('.caja3').text(datos).show();
        caja3.css('opacity','1')

        
    });
    
    // Mousedown y mouseup


    var caja3 = $('h1');

    caja3.mousedown(function(){
        $(this).css('background-color', 'gray')
    })
    caja3.mouseup(function(){
        $(this).css('background-color', 'white')
    })
    
    $(document).mousemove(function(){

        var caja3 = $('.caja3')

        caja3.css('font-heigh','125px')
            .css('position','absolute')
            .css('display','block')
            .css('left',event.clientX)
            .css('top',(event.clientY))

    })
    





});