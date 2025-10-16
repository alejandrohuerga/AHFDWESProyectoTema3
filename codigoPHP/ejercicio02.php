<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02 - Alejandro De la huerga</title>
    </head>
    <body>
        <h1>Alejandro De la huerga</h1>    
        <?php
        /**
         * author: Alejandro De la Huerga
         * since: 09/10/2025
         * 2. Inicializar y mostrar una variable heredoc.
        */
        
        /* Para indicar el comienzo de una variabke Heredoc lo hacemos con el signo <<<
         * Despues utilizamos EOT para marcar el principio y el final.
        */
        
        echo("<h2> Contenido de la variable Heredoc</h2>");
        $sTexto=<<<EOT
                Esto es una variable Heredoc la cual permite escribir
                sin comillas , sin la necesidad de preocuparnos por los saltos
                de linea , incluso podemos poner comillas dobles 
                "como en este caso"
            EOT;
        
        echo($sTexto);
        
        
        ?>
    </body>
</html>
