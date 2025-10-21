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
        
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 24</h2>
        
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 21/10/2025
        * 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
              recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
              respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas
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
                    }else{
                        $aRespuestas[$campo]=$_REQUEST[$campo]; // Guardamos el dato correcto en el array de Respuestas.
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
                
                
                
            }else{ // Si no se ha ingresado correctamente volvemos a mostrar el formulario
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <label for="nombre">Nombre:
                <?php
                    echo ($aErrores['nombre'] == null)
                        ? "<input type='text' name='nombre' class='nombre'/>"
                        : "<input type='text' name='nombre' />
                           <a style='color:red;'>{$aErrores['nombre']}</a>";

                ?>
                </label>
                <br/>
                <label for="edad">Edad:
                <?php
                    echo($aErrores['edad']==null)
                        ? "<input type='text' name='edad' class='edad'/>"
                        : " <input  type='text' name='edad' />
                            <a style='color:red;'>{$aErrores['edad']}</a>"
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
