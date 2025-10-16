<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16 - Alejandro De la Huerga</title>
    </head>
    <body>
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 13/10/2025
         * 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
        */
        
        
        
       // Creamos e inicializamos el Array.
        $aSueldoSemana = [
            "Lunes" => 20,
            "Martes" => 0,
            "Miércoles" => 40,
            "Jueves" => 25,
            "Viernes" => 30,
            "Sábado" => 0,
            "Domingo" => 0
        ];

        // Creamos la función a la cual le pasamos el array como parámetro.
        function sumarSueldoSemana($aSueldo) {
            $iSueldoTotal = 0;

            // Recorremos el array y mostramos el sueldo de cada día
            foreach ($aSueldo as $dia => $sueldo) {
                echo "El $dia has recibido un sueldo de $sueldo €<br>";
                $iSueldoTotal += $sueldo;
            }

            // Devolvemos el total al final
            return $iSueldoTotal;
        }

        // Llamamos a la función y guardamos el resultado
        $totalSemana = sumarSueldoSemana($aSueldoSemana);

        // Mostramos el sueldo total
        echo "<br><strong>El sueldo total de esta semana es: $totalSemana €</strong>";
        
        ?>
    </body>
</html>
