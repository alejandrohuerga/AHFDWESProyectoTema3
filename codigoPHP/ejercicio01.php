<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <?php
        /**
         * author: Alejandro De la Huerga
         * since: 09/10/2025
         * 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla 
           (echo, print, printf, print_r,var_dump).
         */
            $sNombre='Alejandro';
            $iEdad=18;
            $fAltura=1.87;
            $bEstudiante=true;
            $aVariables=['Alejandro',18,1.87,true];
            
            /* Para que no se muestre la variable podemos meterla entre comillas simples o \n delante
             * Para saber el tipo de la variable utilizamos la función gettype().
             * Para mostrar el valor de la variable simplemente la escribimos como la declaramos.             
             */
            echo("<h2>Mostrar datos con echo</h2>");
            echo('La variable $sNombre es de tipo ' .gettype($sNombre)." y tiene el valor ".$sNombre ."<br>");
            echo('La variable $iEdad es de tipo ' .gettype($iEdad)." y tiene el valor ".$iEdad."<br>");
            echo('La variable $fAltura es de tipo ' .gettype($fAltura)." y tiene el valor ".$fAltura ."<br>");
            echo('La variable $bEstudiante es de tipo ' .gettype($bEstudiante)." y tiene el valor ".$bEstudiante ."<br>");
            
            echo("<h2>Mostrar datos con print</h2>");
            print('La variable $sNombre es de tipo '.gettype($sNombre)." y tiene el valor ".$sNombre."<br>");
            print('La variable $iEdad es de tipo '.gettype($iEdad)." y tiene el valor ".$iEdad."<br>");
            print('La variable $fAltura es de tipo '.gettype($fAltura)." y tiene el valor ".$fAltura."<br>");
            print('La variable $bEstudiante es de tipo '.gettype($bEstudiante)." y tiene el valor ".$bEstudiante."<br>");
            
            echo("<h2>Mostrar datos con printf</h2>");
            printf("La variable \$sNombre es de tipo %s y tiene el valor %s<br>", gettype($sNombre),$sNombre);
            printf("La variable \$iEdad es de tipo %s y tiene el valor %s<br>", gettype($iEdad),$iEdad);
            printf("La variable \$fAltura es de tipo %s y tiene el valor %s<br>", gettype($fAltura),$fAltura);
            printf("La variable \$bEstudiante es de tipo %s y tiene el valor %s<br>", gettype($bEstudiante),$bEstudiante);
            
            echo("<h2>Mostrar datos con print_r</h2>");
            print_r($aVariables);
            
            
            echo("<h2>Mostrar datos con var_dump</h2>");
            var_dump($sNombre."</br>");
            var_dump($iEdad."</br>");
            var_dump($fAltura."</br>");
            var_dump($bEstudiante."</br>");
        ?>
    </body>
</html>
