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
         * 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp).
         */
        
        $oFecha=new DateTime("now");
        
        // Convertimos la fecha actual a timestamp.
        print date_timestamp_get($oFecha);
        
        ?>
    </body>
</html>
