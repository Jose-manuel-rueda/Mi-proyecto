$(document).ready(function () {

    // load
    // var user= $('#datos').load('https://reqres.in/api/users/2')


    // GET y POST

    $.get('https://reqres.in/api/users', { page: 2 }, function (response) {
        response.data.forEach((element, index) => {
            $('#datos').append('<p> ' + element.first_name + '</p>')
        })



    });
    //    $('[name="enviar"]').click(function(){

    //        var name = $('[name="name"]').val()
    //        var web = $('[name="web"]').val()
    //        if(web!='' && name!= ''){

    //            var usuario = {
    //                'name':name,
    //                'web':web
    //            }
    //            $.post('https://reqres.in/api/users',usuario,function(response){
    //                console.log(response)
    //            })
    //            var name = $('[name="name"]').val('')
    //            var web = $('[name="web"]').val('')
    //        }else{
    //            alert('No has introducido bien tu datos')
    //        }


    //    })

    $('#formulario').submit(function (e) {
        e.preventDefault();
        var usuario = {
            name: $('input[name="name"]').val(),
            web: $('input[name="web"]').val()
        }

        // $.post($(this).attr('action'), usuario, function (response) {
        //     console.log(response);
        // }).done(function () {
        //     alert('Usuario creado con exito')
        // });
        // Ajax

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: usuario,
            beforeSend: function () {
                console.log('Enviando usuario...')},
            success: function(response){
                console.log(response)},
            error: function(){
                console.log('Ha ocurrido un error')},
            timeout:1000
            
        })
        return false;


    });



});