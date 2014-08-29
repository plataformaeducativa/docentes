<?php
class LagcConfig {
    //Datos del Sitio
    var $lagcnombre = 'Plataforma Educativa';
    var $lagcmail = 'luisgago@jm.edu.pe';
    var $lagcurl = 'http://plataforma.edu.pe/sistema/';

    //Mysql
    var $lagclocal = 'localhost';
    var $lagcbd = 'plataforma';
    var $lagcuser = 'luisgago';
    var $lagcpass = '';

    var $lagccompopri = '2';

    //Plantillas
    var $lagctemplsite = 'default';
}
$config = new LagcConfig();
$con = mysql_connect($config->lagclocal,$config->lagcuser,$config->lagcpass);
mysql_select_db($config->lagcbd,$con) or die("<center>No hay conexion.</center>");
mysql_set_charset('utf8');
$respconfig = mysql_query("select * from configuracion"); $bdconfig = mysql_fetch_array($respconfig);
?>