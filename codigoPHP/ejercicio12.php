<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12 - Alejandro De la Huerga</title>
    </head>
    <body>
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 13/10/2025
         * 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
        */
        
            echo("<h1>Alejandro De la Huerga</h1>");
            
            // Variable $GLOBALS[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$GLOBALS con print_r</h3>');
            echo("<pre>");
            print_r($GLOBALS);
            echo("</pre>");
            
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
                print_r($valorVariable);
                echo("</pre></td>");
    
                echo("</tr>");
            }
            echo("</table>");

            // Variable $_SERVER[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_SERVER con print_r</h3>');
            echo("<pre>");
            print_r($_SERVER);
            echo("</pre>");
            
            // Variable global $_SERVER[] con foreach insertado en una tabla
            
            echo('<h3>$_SERVER[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_SERVER as $clave => $valor){
                echo("<tr><th>\$_SERVER[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            
            // Variable $_GET[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_GET con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_GET nos muestra los parametros enviados por url.
               y en este caso no estamos enviando nada.
             * Si queremos comprobarlo podemos agregar al final de la url lo siguiente: 
               "?nombre=Alejandro&edad=17".
             */
            
            print_r($_GET);
            echo("</pre>");
            
            // Variable global $_GET[] con foreach insertado en una tabla
            
            echo('<h3>$_GET[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_GET as $clave => $valor){
                echo("<tr><th>\$_GET[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_POST[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_POST con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_POST solo se llena cuando enviamos datos por un formulario.
               y en este caso no tenemos ningun formulario.
            */
            print_r($_POST);
            echo("</pre>");
            
            // Variable global $_SERVER[] con foreach insertado en una tabla
            
            echo('<h3>$_POST[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_POST as $clave => $valor){
                echo("<tr><th>\$_POST[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_FILES[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_FILES con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_FILES solo se llena cuando enviamos archivos 
               al servidor por un formulario.
             * Y en este caso no tenemos ningun formulario ni enviamos ningún archivo.
            */
            
            print_r($_FILES);
            echo("</pre>");
            
            // Variable global $_FILES[] con foreach insertado en una tabla
            
            echo('<h3>$_FILES[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_POST as $clave => $valor){
                echo("<tr><th>\$_FILES[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_COOKIE[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            
            echo('<h3>$_COOKIE con print_r</h3>');
            echo("<pre>");
            
            /* 
             * Nos saldra vácio ya que $_COOKIE solo se llena cuando tenemos cookies activas.
             * Y en este caso no tenemos ninguna cookie activa.
            */
            
            print_r($_COOKIE);
            echo("</pre>");
            
            // Variable global $_COOKIE[] con foreach insertado en una tabla
            
            echo('<h3>$_COOKIE[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_COOKIE as $clave => $valor){
                echo("<tr><th>\$_COOKIE[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_SESSION[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            // Metemos valores de sesión al array para que no salga vácio.
            $_SESSION['usuario'] = "Alejandro";
            $_SESSION['edad'] = 17;


            echo('<h3>$_SESSION con print_r</h3>');
            echo("<pre>");
            print_r($_SESSION);
            echo("</pre>");
            
            // Variable global $_COOKIE[] con foreach insertado en una tabla
            
            echo('<h3>$_SESSION[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_SESSION as $clave => $valor){
                echo("<tr><th>\$_SESSION[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_REQUEST[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_REQUEST con print_r</h3>');
            echo("<pre>");
            /*
             * Aparecera vacio ya que $_REQUEST es una variable superglobal que engloba tanto
               $_GET,$_POST y $_COOKIE y estas variables estan vacias.
             */
            print_r($_REQUEST);
            echo("</pre>");
            
            // Variable global $_REQUEST[] con foreach insertado en una tabla
            
            echo('<h3>$_REQUEST[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_REQUEST as $clave => $valor){
                echo("<tr><th>\$_REQUEST[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
            
            // Variable $_ENV[] con print_r (Utilizamos la etiqueta <pre> para que nos desglose el array hacia abajo).
            
            echo('<h3>$_ENV con print_r</h3>');
            echo("<pre>");
            /*
             * Aparecera vacio ya que nuestro servidor no esta configurado para importar variables de entorno.
             */
            print_r($_ENV);
            echo("</pre>");
            
            // Variable global $_ENV[] con foreach insertado en una tabla
            
            echo('<h3>$_ENV[] con foreach()</h3>');
            echo("<table border='1' cellpadding='5' cellspacing='0'>");
            echo("<tr><th style=width:500px>Variable</th><th style=width:500px>Value</th></tr>");
            foreach($_ENV as $clave => $valor){
                echo("<tr><th>\$_REQUEST[" . $clave . "]</th><th>$valor</th></tr>");
            }
            echo("</table>");
        ?>
    </body>
</html>
