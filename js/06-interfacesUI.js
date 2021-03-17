var d = $(document).ready(function () {
    $('body').prepend('<h1>Aprendiendo Interfaces con jQuery UI </h1>');
    // mover elemto por la pagina
    $('.elemento').draggable()
    // redimensionar elementos
    $('.elemento').resizable()
    // Selecciona elementos
    // $('.lista').selectable()
    // Listar y ordenar
    $('.lista').sortable({
        update: function (event, ui) {
           
            console.log('cambio de lista')
        }
    });
    // Drop
    $('.elementoMovido').draggable();
    $('.area').droppable({
        drop:function(){
            console.log('has solatado algo dentro del area')
            $(this).css('background', 'blue')
        }
    });

    // efectos
    $('#mostrar').click(function(){
        $('.cajaefectos').toggle('blind',5000)

    })

    // tooltip

    var f = $('#tooltip').tooltipster()
    f.css('color','green')

    
    

})