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
        
        // Definir asientos y filas como constantes y hacer todos los recuadros iguales.
        
        echo("<h1>Alejandro De la Huerga</h1>");
        echo("<h2>Ejercicio 17</h2>");
        
        
        
        // Rellanamos el array bidimensional con el numero de asientos y filas.
        // Declaracion de la variable $aTeatro de 20 filas y 15 asientos por fila.
        
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
        
        
        // Recorremos con foreach()
        echo("<h2>foreach()</h2>");
        print '<table border="1" cellspacing="0" cellpadding="5">';
        foreach ($aTeatro as $numFila => $aFila) {  
            print("<tr>");
            printf("<td><strong>Fila %d</strong></td>", $numFila);  
            foreach ($aFila as $numAsiento => $ocupante) {
                if ($ocupante !== null) {  
                    print("<td style=background-color:red>$ocupante</td>"); 
                } else { 
                    print("<td style=background-color:green></td>");
                }
            }
            print("</tr>");
        }
        print("</table>");
        
        // Recorremos con while()
        echo("<h2>while()</h2>");
        print '<table border="1" cellspacing="0" cellpadding="5">';
        
        $iFila=1; //Inicializamos una variable para contar las filas a 1.
        
        while($iFila<=20){
            print("<tr>");
            printf("<td><strong>Fila %d</strong></td>", $iFila);
            
            $iColumna=1; //Inicializamos una variable para contar las columnas a 1.
            while($iColumna<=15){
                if($aTeatro[$iFila][$iColumna] !== null){
                    print("<td style='background-color: red'>{$aTeatro[$iFila][$iColumna]}</td>");
                }else { 
                    print("<td style=background-color:green></td>");
                }
                
                $iColumna++;
            }
            
            print("</tr>");
            $iFila++;
        }
        print("</table>");
        
        
        echo("<h2>for()</h2>");
        print '<table border="1" cellspacing="0" cellpadding="5">';
        
        for($iFila=1;$iFila<=20;$iFila++){
            print("<tr>");
            printf("<td><strong>Fila %d</strong></td>", $iFila);
            
            for($iColumna=1;$iColumna<=15;$iColumna++){
                if($aTeatro[$iFila][$iColumna] !== null){
                    print("<td style='background-color: red'>{$aTeatro[$iFila][$iColumna]}</td>");
                }else { 
                    print("<td style=background-color:green></td>");
                }
            }
            
            print("</tr>");
        }
        print("</table>");
        ?>

    </body>
</html>
