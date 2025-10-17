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
            print("<h1>Alejandro De la Huerga</h1>");
            print("<h2>Resultados del cuestionario para {$_POST['nombre']} {$_POST['apellido']} </h2>");
            
            // Mostramos las respuestas del formulario
            
            echo("<p><strong>Nombre: </strong>". $_POST['nombre'] . "</p>");
            echo("<p><strong>Apellido: </strong>". $_POST['apellido'] . "</p>");
            echo("<p><strong>Edad: </strong>". $_POST['edad'] ."</p>");
            echo("<p><strong>Genero: </strong>". $_POST['genero'] ."</p>");
        ?>
    </body>
</html>
