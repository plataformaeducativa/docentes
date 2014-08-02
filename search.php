<?php
include "../admin/config.php"; include "funciones.php";
$palabra = $_POST['p'];
$respuesta = new stdClass();
$respuesta->mensaje = '
<script>
$(".profe").on("click",function(e){
    e.preventDefault();
    var id = $(this).attr("data-id");
    $.ajax({
        dataType: "json",
        url: "verprofe.php?tipo=profesor&id=" + id
    }).done(function(respuesta){
        $("#mensaje").html(respuesta.mensaje).fadeIn();
    });
});
$("img.lazy").lazyload({
    effect : "fadeIn"
});
</script>';
if($_GET['que']=="buscar"){
    $respdocente = mysql_query("SELECT * FROM comp_docente WHERE nombre LIKE '%$palabra%' or apellido LIKE '%$palabra%'");
    while($docente = mysql_fetch_array($respdocente)){
        $respuesta->mensaje .= '
        <div class="col-1-3 space">
            <div class="content fondito">
                <div class="foto">
                    <img class="lazy" data-original="'.docente::verfoto($docente['id_docente']).'" title="'.$docente['nombre'].' '.$docente['apellido'].'">
                </div>
                <div class="detalles">
                    <span class="nombre">'.$docente['nombre'].' '.$docente['apellido'].'</span>
                    <div class="btn1 clr1"><span class="icon-profile"></span><span class="profe" data-id="'.$docente['id_docente'].'">Ver Detalles</span></div>
                </div>
            </div>
        </div>';
    }
}
else if($_GET['que']=="letras"){
    $letra = $_GET["letra"];
    $respdocente = mysql_query("SELECT * FROM comp_docente WHERE apellido LIKE '$letra%'");
    while($docente = mysql_fetch_array($respdocente)){
        $respuesta->mensaje .= '
        <div class="col-1-3 space">
            <div class="content fondito">
                <div class="foto">
                    <img class="lazy" data-original="'.docente::verfoto($docente['id_docente']).'" title="'.$docente['nombre'].' '.$docente['apellido'].'">
                </div>
                <div class="detalles">
                    <span class="nombre">'.$docente['nombre'].' '.$docente['apellido'].'</span>
                    <div class="btn1 clr1"><span class="icon-profile"></span><span class="profe" data-id="'.$docente['id_docente'].'">Ver Detalles</span></div>
                </div>
            </div>
        </div>';
    }
}
echo json_encode($respuesta);
?>