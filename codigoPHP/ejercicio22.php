<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 22</h2>
        <?php
        
            /**
            * @author: Alejandro De la Huerga
            * @since: 17/10/2025
            * 22.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                recogidas.
            */
        
            if (isset($_POST['enviar'])) {
                print "Su nombre es $_REQUEST[nombre]<br>";
                print "Su edad es $_REQUEST[edad]<br/>";
            } else {
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <label for="nombre">Nombre:
                    <input type="text" name="nombre">
                </label><br>
                <br/>
                <label for="edad">Edad: </label>
                <input type="number" name="edad" id="edad"/><br><br>
                <br/>
                <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
        }
        ?>
    </body>
</html>
