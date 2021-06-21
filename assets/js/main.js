$(document).ready(function(){
    $('ul.pestanas li a:first').addClass('seleccionado');
    $('.paises article').hide();
    $('.paises article:first').show();

    $('ul.pestanas li a').click(function(){
        $('ul.pestanas li a').removeClass('seleccionado');
        $(this).addClass('seleccionado');
        $('.paises article').hide();

        var seleccionadoPestana = $(this).attr('href');
        $(seleccionadoPestana).show();
        return false;
    }); 
}); 