<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23 - Alejandro De la Huerga</title>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 23</h2>
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 17/10/2025
        * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
             recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente
        */
            
            require_once '../core/231018libreriaValidacion.php'; //Importación de libreria para la validación de los campos.
            $aErrores = ['nombre' => null, 'edad' => null];
            $aRespuestas=['nombre' => null, 'edad' => null];
            $entradaOK=true;
            
            if (isset($_REQUEST['enviar'])) { //Código que se ejecuta cuando se envía el formulario.
            
                // Validamos los datos para campo del formulario.
                
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1);
                $aErrores['edad']= validacionFormularios::comprobarEntero($_REQUEST['edad']);
                
                foreach($aErrores as $campo => $valor){
                    if($valor !=null){ // Si ha habido algun error $entradaOK es falso.
                        $entradaOK=false;
                    }
                }
                
            } else {
                // 
                $entradaOK=false;
            }
            // Tratamiento del formulario.
            if($entradaOK){ // Si los datos han sido ingresados correctamente.
            
                //Rellenamos el array de respuestas con los valores ingresados.
                
                $aRespuestas['nombre']=$_REQUEST['nombre'];
                $aRespuestas['edad'] = $_REQUEST['edad'];
                
                // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                
                foreach($aRespuestas as $campo => $valor){
                    print("Su $campo es: ". $valor ."<br/>");
                }
                
            }else{ // Si no se ha ingresado correctamente volvemos a mostrar el formulario
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <label for="nombre">Nombre:
                <?php
                    if ($aErrores['nombre'] == null) { 
                        echo "<input  type='text' name='nombre' />";
                    } else { //Mostramos mensajes de error (si los hay y el formulario no se muestra por primera vez.
                        echo" <input  type='text' name='nombre' >";
                        echo "<a style='color:red;'>$aErrores[nombre]</a>";
                    }
                ?>
                </label>
                <br/>
                <label for="edad">Edad:
                <?php
                    if($aErrores['edad']==null){ 
                        echo("<input type='text' name='edad' />");
                    }else{
                        echo" <input  type='text' name='edad' >";
                        echo "<a style='color:red;'>$aErrores[edad]</a>";
                    }
                ?>
                </label>
                <br/>
                <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
            }     
        ?>
            
    </body>
</html>
