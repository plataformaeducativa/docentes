<?php include "config.php"; include "funciones.php";
if(empty($_GET['id'])){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Docentes - UTP-FA - Plataforma Educativa</title>
</head>
<body>
    404
</body>
</html>
<?php
}
else {
    $respcont = mysql_query("select * from comp_docente where id_docente='".$_GET['id']."'");
    $profesor = mysql_fetch_array($respcont);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes - UTP-FA - Plataforma Educativa</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.lazyload.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div id="cuerpo">
        <div class="cabeza">
            <h1><a href=".">DOCENTES</a></h1>
            <div class="logos">
                <figure id="logo1">
                    <img src="img/plataforma.png">
                </figure>
                <figure id="logo2">
                    <img src="img/utp.png">
                </figure>
            </div>
        </div>
        <section class="filter">
            <div class="grid grid-pad center">
                <div class="col-5-12">
                    <h2><?=$profesor["nombre"].' '.$profesor["apellido"]; ?></h2>
                </div>
                <div class="col-4-12">
                    &nbsp;
                </div>
                <div class="col-3-12 center">
                    <a href="" class="atras">< Ver lista</a>
                </div>
            </div>
        </section>
        <section class="docentes">
            <div class="grid grid-pad">
                <div class="col-3-12 gridcorrec2" id="profesores">
                   <div class="content profesor">
                       <img src="<?=docente::verfoto($profesor['id_docente']); ?>" title="<?=$profesor['nombre'].' '.$profesor['apellido']; ?>">
                       <center><?=$profesor["correo"]; ?></center>
                       <ul class="lista">
                            <li><span class="icon-user azul-claro"></span> <a href="<?=$profesor["perfil"]; ?>" target="_blank">Ver Perfil</a></li>
                            <li><span class="icon-mail azul-claro"></span> <a href="<?=$profesor["mensaje"]; ?>" target="_blank">Enviar Mensaje</a></li>
                            <br/>
                            <a href="http://plataforma.edu.pe/sistema/archivos/docentes/horarios/<?=$profesor['horario']; ?>" download class="btn1 clr1"><span class="icon-download"></span> Descargar Horario </a>
                        </ul>
                   </div>
                </div>
                <div class="col-9-12">
                    <!-- <div class="horario_tab">
                        <a href="http://plataforma.edu.pe/sistema/archivos/docentes/horarios/<?=$profesor['horario']; ?>" target="_blank" title="Ver el horario más grande" class="azul-claro"><span class="icon-calendar"></span></a>
                    </div> -->
                    <div class="video">
                        <embed width="693px" height="335px" src="http://plataforma.edu.pe/sistema/archivos/docentes/horarios/<?=$profesor['horario']; ?>" type="application/pdf">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <a href="http://plataforma.edu.pe/" target="_blank">Plataforma Educativa</a><br>
            Todos los derechos reservados.
        </footer>
    </div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-41465403-6', 'plataforma.edu.pe');
    ga('send', 'pageview');
</script>
</body>
</html>
<?php } ?>