<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 17/10/2025
         * 21.Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
              las preguntas y las respuestas recogidas.
        */
            print("<h1>Alejandro De la Huerga</h1>");
            print("<h2>Resultados del cuestionario para {$_REQUEST['nombre']} {$_REQUEST['apellido']} </h2>");
            
            // Mostramos las respuestas del formulario
            
            echo("<p><strong>Nombre: </strong>". $_REQUEST['nombre'] . "</p>");
            echo("<p><strong>Apellido: </strong>". $_REQUEST['apellido'] . "</p>");
            echo("<p><strong>Edad: </strong>". $_REQUEST['edad'] ."</p>");
            
            
        ?>
    </body>
</html>
