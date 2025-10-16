<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17 - Alejandro De la Huerga</title>
        
    </head>
    <body>
        <?php
        /**
         * @author: Alejandro De la Huerga
         * @since: 13/10/2025
         * 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas 
           que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
           (Inicializamos el array ocupando únicamente 5 asientos). 
           Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados 
           en cada fila y las personas que lo ocupan.
        */
        
        
        echo("<h1>Alejandro De la Huerga</h1>");
        echo("<h2>foreach</h2>");
        
        
        
        // Rellanamos el array bidimensional con el numero de asientos y filas.
        
        for($iFila=1;$iFila<=20;$iFila++){
            for($iColumna=1;$iColumna<=15;$iColumna++){
                $aTeatro[$iFila][$iColumna]=null;
            }
        }
        
        // Insertamos el nombre de las personas de 5 asientos.
        
        $aTeatro[1][1]="Luis";
        $aTeatro[3][15]="Laura";
        $aTeatro[14][5]="Pepe";
        $aTeatro[7][3]="Miguel";
        $aTeatro[5][10]="Maria";
        
        
        // Recorremos con foreach
        
        print '<table>';
        foreach ($aTeatro as $aFila) {
            print("<tr>");
            printf("<td>Pasillo %d</td>", $aFila);
            foreach ($aFila as $asiento) {
                print("<td>$asiento</td>");
                
            }
            print("</tr>");
        }
        print("</table>");
        ?>
    </body>
</html>
