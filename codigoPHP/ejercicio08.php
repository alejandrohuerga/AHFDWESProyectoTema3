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
         * @since: 13/10/2025
         * 8. Mostrar la dirección IP del equipo desde el que estás accediendo.
        */
        
        echo("<h1>Alejandro De la Huerga</h1>");
        
        echo("<h2>Dirección IP del equipo que esta accediendo</h2>");
        
        $sDireccionIP=$_SERVER['REMOTE_ADDR'];
        echo($sDireccionIP);
        ?>
    </body>
</html>
