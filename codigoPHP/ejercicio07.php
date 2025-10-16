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
         * 7. Mostrar el nombre del fichero que se está ejecutando.
        */
        
        echo("<h1>Alejandro De la Huerga</h1>");
        
        // Muestra la ruta y el nombre del fichero en ejecución. (Ruta relativa)
        
        echo("<h2>Muestra la ruta y el nombre del fichero en ejecucción (Ruta relativa)</h2>");
        
        echo $_SERVER['PHP_SELF'];
        
        // Muestra la ruta y el nombre del fichero en ejecución. (Ruta absoluta).
        
        echo("<h2>Muestra la ruta y el nombre del fichero en ejecucción (Ruta absoluta)</h2>");
        
        $sFichero= __FILE__;
        echo $sFichero;
        
        // Muestra solamante el nombre del fichero.
        
        echo("<h2>Muestra solamente el nombre del fichero</h2>");
        
        $sNombreFichero= basename(__FILE__);
        echo($sNombreFichero);
        ?>
    </body>
</html>
