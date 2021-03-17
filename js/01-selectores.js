
$(document).ready(function(){
    // Selectores de id
    var rojo = $('#rojo').css('background-color', 'red')
                        .css('color','white')
    var amarillo = $('#amarillo').css('background-color', 'yellow')
                        .css('color','green')
    var green = $('#verde').css('background-color', 'green')
                        .css('color','white')
    // Selectores de clases
    var miClase = $('.zebra');
    
    var sinBordes = $('.sinBorde').click(function(){
        $(this).addClass('zebra')
    })    
    //Selectores de etiquetas
    var parrafos = $('p').css('cursor', 'pointer')
    parrafos.click(function(){
        var that = $(this)
        if(!that.hasClass('grande')){
            
            
            that.addClass('grande')
            
        }else{
            that.addClass('zebra')
            // that.removeClass('zebra')
            that.removeClass('grande')
        }
    })
    // selectores de atributos
    $('[title="Google"]').css('background-color', 'gray')
    $('[alt="mipag"]').css('background-color', 'gray')

    // Otros
    var resaltado =  $('#caja').find('.resaltado')
    var resaltado2 = $('#caja .resaltado')
    console.log(resaltado)
    resaltado.css('font-weight', 'bold')
    resaltado2.css('font-size', '20px')
})
