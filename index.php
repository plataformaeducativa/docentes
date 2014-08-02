<?php include "../admin/config.php"; include "funciones.php"; ?>
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
            <div class="grid grid-pad">
                <div class="col-3-12 blo-primero">
                    <section class="buscador">
                        <form method="post" id="search">
                            <input type="search" name="p" class="input" id="bc" autocomplete="off" required placeholder="Buscar Ejem: Medina">
                        </form>
                    </section>
                </div>
                <div class="col-1-12">
                    &nbsp;
                </div>
                <div class="col-8-12">
                   <section class="palabras">
                        <a href="a" class="letra">a</a>
                        <a href="b" class="letra">b</a>
                        <a href="c" class="letra">c</a>
                        <a href="d" class="letra">d</a>
                        <a href="e" class="letra">e</a>
                        <a href="f" class="letra">f</a>
                        <a href="g" class="letra">g</a>
                        <a href="h" class="letra">h</a>
                        <a href="i" class="letra">i</a>
                        <a href="j" class="letra">j</a>
                        <a href="k" class="letra">k</a>
                        <a href="l" class="letra">l</a>
                        <a href="m" class="letra">m</a>
                        <a href="n" class="letra">n</a>
                        <a href="ñ" class="letra">ñ</a>
                        <a href="o" class="letra">o</a>
                        <a href="p" class="letra">p</a>
                        <a href="q" class="letra">q</a>
                        <a href="r" class="letra">r</a>
                        <a href="s" class="letra">s</a>
                        <a href="t" class="letra">t</a>
                        <a href="u" class="letra">u</a>
                        <a href="v" class="letra">v</a>
                        <a href="w" class="letra">w</a>
                        <a href="x" class="letra">x</a>
                        <a href="y" class="letra">y</a>
                        <a href="z" class="letra">z</a>
                    </section>
                </div>
            </div>
        </section>
        <section class="docentes">
            <div class="grid grid-pad w95" id="profesores">
                <?=docente::verprofesores($_GET['tutores']); ?>
            </div>
        </section>
        <footer>
            <a href="http://plataforma.edu.pe/" target="_blank">Plataforma Educativa</a><br>
            Todos los derechos reservados.
        </footer>
    </div>
    <div id="mensaje"></div>
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