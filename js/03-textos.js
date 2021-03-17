$(document).ready(function () {
    cargarA()
    $('[name = "addButton"]').click(function () {
        var menu = $('#menu');
        var nuevoA = $('[name = "nuevoA"]').val()
        menu.prepend('<li><a href="' + nuevoA + '"> ' + nuevoA + '</a></li>');
        cargarA()

    });

});
function cargarA() {
    $('a').each(function () {

        var that = $(this)
        var enlace = that.attr('href')
        that.attr('class', 'enlaces')
        // that.removeAttr('class="palo"')

        that.text(enlace).css('text-decoration', 'none')
            .css('color', 'black');
    });



}