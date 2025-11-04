<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 05 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 5</h2>
        <?php
        /**
         * @author:  Alejandro De la Huerga
         * @since  04/11/2025
         * 
         */
        // Establecer la zona horaria 
            date_default_timezone_set('Europe/Madrid');
        //Para obtener el timestamp actual
        //  $timeStamp = time();
        //Mostrar el timeStamp
        // echo "El Timestamp actual es: ".date("d-m-Y H:i:s ",$timeStamp);


            $ofecha = new DateTime();
        //Para obtener el timestamp actual
            $timestamp = $ofecha->getTimestamp();
        //Mostrar el timeStamp
            echo"<p>Codigo TimeStamp : " . $timestamp . "</p>";
            echo '<p class="parafo">El formato legible del Timestamp actual es: ' . date("d-m-Y H:i:s", $timestamp) . "</p>";
        ?>
    </body>
</html>
