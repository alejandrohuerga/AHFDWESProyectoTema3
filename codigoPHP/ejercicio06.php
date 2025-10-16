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
         * 6. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp).
        */
        echo("<h1>Alejandro De la Huerga</h1>");
        
        $oFecha= new DateTime();
        
        //Mostramos la fecha actual.
        echo("<h2>Fecha actual</h2>");
        echo($oFecha->format("d/m/Y"));
        
        // Le agregamos 60 dias con el meto add.
        $oFecha->add(new DateInterval('P60D'));
        
        //Mostramos la fecha dentro de 60 dias.
        echo("<h2>Fecha dentro de 60 dias</h2>");
        echo($oFecha->format("d/m/Y"));
        ?>
    </body>
</html>
