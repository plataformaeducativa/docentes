$(document).ready( function(){
    $('.profe').on('click',function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        $.ajax({
            dataType: 'json',
            url: "verprofe.php?tipo=profesor&id=" + id
        }).done(function(respuesta){
            $("#mensaje").html(respuesta.mensaje).fadeIn();
        });
    });
    $("img.lazy").lazyload({
        effect : "fadeIn"
    });
    $('#bc').focus();
    $("#search").submit(function(){
        var formulario = $("#search").serializeArray();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "search.php?que=buscar",
            data: formulario
        }).done(function(respuesta){
            $("#profesores").html(respuesta.mensaje).fadeIn();
        });
        return false;
    });
    $(".letra").on('click',function(e){
        e.preventDefault();
        var letra=$(this).attr('href');
        $.ajax({
            dataType: 'json',
            url: "search.php?que=letras&letra="+letra
        }).done(function(respuesta){
            $("#profesores").html(respuesta.mensaje).fadeIn();
        });
    });
});