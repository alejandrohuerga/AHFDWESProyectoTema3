<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 04 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Fecha y Hora actual en Castellano</h2>
        <?php
        /**
         * author: Alejandro De la Huerga
         * since: 10/10/2025
         * 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
        */
            echo("<h1>Alejandro De la Huerga</h1>");
            
            setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');
            date_default_timezone_set('Europe/Lisbon');
            
            $ofecha = new DateTime();
            echo "<h2>Fecha y hora en Oporto: </h2>";
            echo $ofecha->format("d/m/Y - H:i")."<br>";
            echo $ofecha->format("d \d\\e F \d\\e Y  - H:i")."<br>";

            echo "<p>No puedo poner el mes en portugúes de momento (ver código)</p>";
            date_default_timezone_set('Europe/Madrid');
         
        ?>
    </body>
</html>
