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
         * 15. Crear e inicializar un array con el sueldo percibido de lunes a domingo.
           Recorrer el array para calcular el sueldo percibido durante la semana. 
           (Array asociativo con los nombres de los días de la semana).
        */
        
        // Aqui voy a guardar el sueldo total de la semana.
        $iSueldoTotal=0;
        
        // Creamos e inicializamos el Array.
        
        $aSueldoSemana=[
            "Lunes"=>20,
            "Martes"=>0,
            "Miercoles"=>40,
            "Jueves"=>25,
            "Viernes"=>30,
            "Sabado"=>0,
            "Domingo"=>0
        ];
        
        echo("<h1>Alejandro De la Huerga</h1>");
        
        // Recorremos el array con un foreach().
        
        echo("<h2>Sueldo ganado cada dia</h2>");
        
        foreach ($aSueldoSemana as $dia => $sueldoDiario) {
            $iSueldoTotal += $sueldoDiario;
            print("El ". $dia . "has cobrado ". $sueldoDiario . "</br>");
        }
        
        echo("<h2>Sueldo ganado en toda la semana</h2>");
        
        echo("En total esta semana has cobrado: ". $iSueldoTotal ." euros");
        ?>
    </body>
</html>
