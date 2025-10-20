<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12 - Alejandro De la Huerga</title>
        <style>
            th{
                background-color: violet;
            }
            
            td{
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 20/10/2025
         * 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
        */
        
            echo("<h1>Alejandro De la Huerga</h1>");
            
            // Variable global $_SERVER[] con foreach insertado en una tabla
            
            echo('<h3>$_SERVER[] con foreach()</h3>');
            
            if(empty($_SERVER)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_SERVER as $clave => $valor){
                    echo("<tr><td>\$_SESSION[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            
            // Variable global $_SESSION[] con foreach insertado en una tabla
            
            echo('<h3>$_SESSION[] con foreach()</h3>');
            if(empty($_SESSION)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_SESSION as $clave => $valor){
                    echo("<tr><td>\$_SESSION[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            // Variable global $_COOKIE[] con foreach insertado en una tabla
            
            echo('<h3>$_COOKIE[] con foreach()</h3>');
            if(empty($_COOKIE)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_COOKIE as $clave => $valor){
                    echo("<tr><td>\$_COOKIE[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            // Variable global $_REQUEST[] con foreach insertado en una tabla
            
            echo('<h3>$_REQUEST[] con foreach()</h3>');
            if(empty($_REQUEST)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_REQUEST as $clave => $valor){
                    echo("<tr><td>\$_REQUEST[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            /* 
             * Variable global $_GLOBALS[] con foreach insertado en una tabla.
             * El campo variable contiene el nombre de las variables globales que contine $GLOBALS
             * El campo Value contiene el contenido de los arrays de cada una de las variables globales
               que contiene $GLOBALS.
             */
            
            
            echo('<h3>$GLOBALS con foreach</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach ($GLOBALS as $nombreVariable => $valorVariable) {
                
                // Mostramos el nombre de la variable global.
                
                echo("<td>\$$nombreVariable</td>");
    
                // Mostramos el contenido completo de la variable.
                
                echo("<td><pre>");
                if(empty($valorVariable)){
                    print_r("La variable esta vacia");
                }else{
                    print_r($valorVariable);
                }
                
                echo("</pre></td>");
    
                echo("</tr>");
            }
            echo("</table>");
            
            // Variable global $_GET[] con foreach insertado en una tabla
            
            echo('<h3>$_GET[] con foreach()</h3>');
            if(empty($_GET)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_GET as $clave => $valor){
                    echo("<tr><td>\$_GET[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");   
            }
            
            // Variable global $_POST[] con foreach insertado en una tabla
            
            echo('<h3>$_POST[] con foreach()</h3>');
            if(empty($_POST)){
                print_r("La variable esta vacia");
            }else{
                 echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_POST as $clave => $valor){
                    echo("<tr><td>\$_POST[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            // Variable global $_FILES[] con foreach insertado en una tabla
            
            echo('<h3>$_FILES[] con foreach()</h3>');
            if(empty($_FILES)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_FILES as $clave => $valor){
                    echo("<tr><td>\$_FILES[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            // Variable global $_ENV[] con foreach insertado en una tabla
            
            echo('<h3>$_ENV[] con foreach()</h3>');
            if(empty($_ENV)){
                print_r("La variable esta vacia");
            }else{
                echo("<table border='1' cellpadding='5' cellspacing='0'>");
                echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
                foreach($_ENV as $clave => $valor){
                    echo("<tr><td>\$_REQUEST[" . $clave . "]</td><td>$valor</td></tr>");
                }
                echo("</table>");
            }
            
            // Variable $_SERVER[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_SERVER con print_r</h3>');
            echo("<pre>");
            print_r($_SERVER);
            echo("</pre>");
            
            
            
            // Variable $GLOBALS[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$GLOBALS con print_r</h3>');
            echo("<pre>");
            print_r($GLOBALS);
            echo("</pre>");
            
            

            
            
            // Variable $_GET[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_GET con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_GET nos muestra los parametros enviados por url.
               y en este caso no estamos enviando nada.
             * Si queremos comprobarlo podemos agregar al final de la url lo siguiente: 
               "?nombre=Alejandro&edad=17".
             */
            if(empty($_GET)){
                print_r("La variable esta vacia");
            }else{
                print_r($_GET);
            }
            
            echo("</pre>");
            
            
            
            
            // Variable $_POST[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_POST con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_POST solo se llena cuando enviamos datos por un formulario.
               y en este caso no tenemos ningun formulario.
            */
            if(empty($_POST)){
                print_r("La variable esta vacia");
            }else{
                print_r($_POST);
            }
            echo("</pre>");
            
            
            
            
            // Variable $_FILES[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_FILES con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_FILES solo se llena cuando enviamos archivos 
               al servidor por un formulario.
             * Y en este caso no tenemos ningun formulario ni enviamos ningún archivo.
            */
            
            if(empty($_FILES)){
                print_r("La variable esta vacia");
            }else{
                print_r($_FILES);
            }
            echo("</pre>");
            
            
            
            
            // Variable $_COOKIE[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            
            echo('<h3>$_COOKIE con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_COOKIE solo se llena cuando tenemos cookies activas.
             * Y en este caso no tenemos ninguna cookie activa.
            */
            
            if(empty($_COOKIE)){
                print_r("La variable esta vacia");
            }else{
                print_r($_COOKIE);
            }
            echo("</pre>");
            
            
            
            
            // Variable $_SESSION[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            

            echo('<h3>$_SESSION con print_r</h3>');
            echo("<pre>");
            if(empty($_SESSION)){
                print_r("La variable esta vacia");
            }else{
                print_r($_SESSION);
            }
            echo("</pre>");
            
            
            
            // Variable $_REQUEST[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_REQUEST con print_r</h3>');
            echo("<pre>");
            
            /*
             * Aparecera vacio ya que $_REQUEST es una variable superglobal que engloba tanto
               $_GET,$_POST y $_COOKIE y estas variables estan vacias.
             */
            
            if(empty($_REQUEST)){
                print_r("La variable esta vacia");
            }else{
                print_r($_REQUEST);
            }
            echo("</pre>");
            
             
            
            // Variable $_ENV[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_ENV con print_r</h3>');
            echo("<pre>");
            
            /*
             * Aparecera vacio ya que nuestro servidor no esta configurado para importar variables de entorno.
             */
            
            if(empty($_ENV)){
                print_r("La variable esta vacia");
            }else{
                print_r($_ENV);
            }
            echo("</pre>");
            

        ?>
    </body>
</html>
