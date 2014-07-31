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
});