<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Fecha y Hora actual en Castellano</h2>
        
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 09/10/2025
         * 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. 
         * (Utilizar cuando sea posible la clase DateTime).
         */
            
        //setlocale("Europe/Madrid");
        date_default_timezone_set('Europe/Madrid');
        $ofecha = new DateTime();
        echo "<h3>Fecha y hora con formato personalizado</h3>";
        echo (($ofecha->format("Y-m-d H:i:s")) . "<br>");
        echo ($ofecha->format("l, d F Y") . "<br>");
        echo ($ofecha->format("D, d M Y") . "<br>");
        echo ("¿Es año bisiesto? (1=Si, 0=No): " . ($ofecha->format("L")) . "<br>");
        echo ($ofecha->format("H:i:s") . "<br>");
        echo ($ofecha->format("h:i A") . "<br>");
        echo ("Zona horaria: " . $ofecha->format("e") . "<br>");
        /*
          https://www.php.net/manual/es/datetime.format.php
         */

        echo "<h3>Fecha y hora con formato pre-establecido</h3>";
        echo $ofecha->format(DateTimeInterface::RFC2822), "\n";
        echo $ofecha->format(DateTimeInterface::W3C);
?>
    </body>
</html>
