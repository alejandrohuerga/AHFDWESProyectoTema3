<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23 - Alejandro De la Huerga</title>
        <style>
            .nombre{
                background-color: yellow;
            }
        </style>
    </head>
    <body>
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 23</h2>
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 21/10/2025
        * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
             recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente
        */
            
            require_once '../core/231018libreriaValidacion.php'; //Importación de libreria para la validación de los campos.
            $aErrores = ['nombre' => null, 'edad' => null]; // Array que almacena los errores.
            $aRespuestas=['nombre' => null, 'edad' => null]; // Array que almacena las respuestas.
            $entradaOK=true; // variable booleana que indica si hay o no errores al enviar el formulario.
            
            if (isset($_REQUEST['enviar'])) { //Código que se ejecuta cuando se envía el formulario.
            
                // Validamos los datos para cada campo del formulario.
                
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1,);
                $aErrores['edad']= validacionFormularios::comprobarEntero($_REQUEST['edad']);
                
                foreach($aErrores as $campo => $valor){
                    if($valor !=null){ // Si ha habido algun error $entradaOK es falso.
                        $entradaOK=false;
                        
                    }
                }
                
            } else {
                
                $entradaOK=false; // Si el formulario no se ha rellenado nunca.
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
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="nombre" value='<?php echo $_REQUEST['nombre'] ?? ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['nombre']?>  </a>
                </label>
                <br/>
                <label for="edad">Edad:
                    <input type="text" name="edad" value='<?php echo $_REQUEST['edad'] ?? ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['edad']?>  </a>
                </label>
                <br/>
                <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
            }     
        ?>
            
    </body>
</html>
