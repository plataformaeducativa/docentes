<?php
    include "config.php"; include "funciones.php";
    $respuesta = new stdClass();
    if($_GET['tipo']=="profesor"){
        $respcont = mysql_query("select * from comp_docente where id_docente='".$_GET['id']."'");
        $profesor = mysql_fetch_array($respcont);
    	$respuesta->mensaje = '
    	<script>
        $(".cerrar").click(function(){
            $(".overlay").addClass("fadeOut");
            $(".mensaje").addClass("bounceOutUp");

            setTimeout(function () {
                $(".overlay").removeClass("fadeOut").removeClass("fadeIn");
                $(".mensaje").removeClass("bounceOutUp").removeClass("bounceInDown");
            }, 1010);
            setTimeout(function () {
                $(".overlay").remove();
                $(".mensaje").remove();
            }, 500);

            return false;
        });
        </script>
        <div class="mensaje animated bounceInDown">
            <div class="cerrar">x</div>
            <span class="texto">
                <div class="grid grid-pad">
                    <div class="col-3-12 gridcorrec2">
                       <div class="content profesor">
                           <img src="'.docente::verfoto($profesor['id_docente']).'" title="'.$profesor['nombre'].' '.$profesor['apellido'].'">
                           <div class="nombres">
                                '.$profesor["nombre"].' '.$profesor["apellido"].'
                           </div>
                           <center>'.$profesor["correo"].'</center>
                           <ul class="lista">
                                <li><span class="icon-user azul-claro"></span> <a href="'.$profesor["perfil"].'" target="_blank">Ver Perfil</a></li>
                                <li><span class="icon-mail azul-claro"></span> <a href="'.$profesor["mensaje"].'" target="_blank">Enviar Mensaje</a></li>
                                <br/><div class="btn1 clr1"><span class="icon-download"></span> Descargar Horario </div>
                            </ul>
                       </div>
                    </div>
                    <div class="col-9-12 gridcorrec1">
                       <div class="content horario">
                            <div class="horario_tab">
                                <a href="http://plataforma.edu.pe/sistema/archivos/docentes/horarios/'.$profesor['horario'].'" target="_blank" title="Ver el horario más grande" class="azul-claro"><span class="icon-calendar"></span></a>
                            </div>
                            <embed width="100%" height="335px" name="plugin" src="http://plataforma.edu.pe/sistema/archivos/docentes/horarios/'.$profesor['horario'].'" type="application/pdf">
                       </div>
                    </div>
                </div>
            </span>
        </div>
        <div class="overlay"></div>';
   	}
    echo json_encode($respuesta);
?>