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
</head>
<body>
    <div id="cuerpo">
        <div class="cabeza">
            <h1>DOCENTES</h1>
            <div class="logos">
                <figure id="logo1">
                    <img src="img/plataforma.png">
                </figure>
                <figure id="logo2">
                    <img src="img/utp.png">
                </figure>
            </div>
        </div>
        <section class="total">
            <div class="grid grid-pad">
                <div class="col-1-3 blo-primero">
               <div class="content">
                   <section class="buscador">
                        <form action="buscar.php" class="search" method="post">
                            <input type="text" name="p" class="input" placeholder="Buscar...">
                        </form>
                    </section>
               </div>
            </div>
            <div class="col-1-3">
               <div class="content">
                   <section class="palabras">
                        <a href="" class="letra">a</a>
                        <a href="" class="letra">b</a>
                        <a href="" class="letra">c</a>
                        <a href="" class="letra">d</a>
                        <a href="" class="letra">e</a>
                        <a href="" class="letra">f</a>
                        <a href="" class="letra">g</a>
                        <a href="" class="letra">h</a>
                        <a href="" class="letra">i</a>
                        <a href="" class="letra">j</a>
                        <a href="" class="letra">k</a>
                        <a href="" class="letra">l</a>
                        <a href="" class="letra">m</a>
                        <a href="" class="letra">n</a>
                        <a href="" class="letra">ñ</a>
                        <a href="" class="letra">o</a>
                        <a href="" class="letra">p</a>
                        <a href="" class="letra">q</a>
                        <a href="" class="letra">r</a>
                        <a href="" class="letra">s</a>
                        <a href="" class="letra">t</a>
                        <a href="" class="letra">u</a>
                        <a href="" class="letra">v</a>
                        <a href="" class="letra">w</a>
                        <a href="" class="letra">x</a>
                        <a href="" class="letra">y</a>
                        <a href="" class="letra">z</a>
                    </section>
               </div>
            </div>
            <div class="col-1-3">
               <div class="content">
                   <section class="institucion">
                        <select name="">
                            <optgroup label="Cursos">
                                <option value="">Matematica</option>
                                <option value="">Quimica I</option>
                                <option value="">Quimica II</option>
                                <option value="">Comunicación</option>
                                <option value="">Desarrollo Humano</option>
                                <option value="">Ecología</option>
                                <option value="">Economía General</option>
                                <option value="">Filosofía</option>
                                <option value="">Informática</option>
                            </optgroup>
                        </select>
                    </section>
               </div>
            </div>
            </div>
        </section>
        <section class="docentes">
            <div class="grid grid-pad">
                <?=docente::verprofesores($_GET['tutores']); ?>
            </div>
        </section>
        <footer>
            <a href="http://plataforma.edu.pe/" target="_blank">Plataforma Educativa</a><br>
            Todos los derechos reservados.
        </footer>
    </div>
    <div id="mensaje"></div>
    <script src="js/main.js"></script>
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