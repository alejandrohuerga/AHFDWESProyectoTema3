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
        <h1>Alejandro De la Huerga</h1>
        <h2>Formulario registro de datos del usuario</h2>
        <form name="formularioDatosUsuario" action="Tratamiento.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"/><br><br> 
            
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="apellido"/><br><br>
            
            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad"/><br><br>
            
            <label>Género:</label>
            <input type="radio" name="genero" value="Masculino" id="masc">
            <label for="masc">Masculino</label>
            <input type="radio" name="genero" value="Femenino" id="fem">
            <label for="fem">Femenino</label><br><br>
            
            <input type="submit" value="Enviar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
