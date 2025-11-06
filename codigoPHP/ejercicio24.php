<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24 - Alejandro De la Huerga</title>
        <style>
            * {  
              box-sizing: border-box;
              margin: 0;
              padding: 0;
              font-family: "Playfair Display", serif;
            }

            body {
              background: radial-gradient(circle, rgba(250,197,238,1) 0%, rgba(228,177,250,1) 100%);
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              min-height: 100vh;
            }

            h1, h2 {
              text-align: center;
              color: #333;
              margin-bottom: 10px;
            }

            /* ---------- FORMULARIO ---------- */
            form {
              background: #fff;
              padding: 30px 40px;
              border-radius: 15px;
              box-shadow: 0 0 15px rgba(0,0,0,0.1);
              width: 350px;
              margin-top: 20px;
              text-align: left;
            }

            label {
              display: block;
              margin-bottom: 20px;
              color: #222;
              font-weight: bold;
            }

            input[type="text"] {
              width: 100%;
              padding: 10px;
              border: 2px solid #ccc;
              border-radius: 8px;
              margin-top: 5px;
              font-size: 1rem;
              transition: all 0.2s ease;
            }

            input[type="text"]:focus {
              border-color: #b56eea;
              outline: none;
              background-color: #f8e8ff;
            }

            /* Campo amarillo (obligatorio) */
            input[style*="lightgoldenrodyellow"] {
              background-color: lightgoldenrodyellow !important;
            }

            /* Mensajes de error */
            a[style*="color:red"] {
              display: block;
              margin-top: 5px;
              font-size: 0.9rem;
            }

            /* Botón de envío */
            input[type="submit"] {
              background-color: #b56eea;
              color: white;
              font-weight: bold;
              border: none;
              border-radius: 8px;
              padding: 10px 15px;
              cursor: pointer;
              transition: background 0.2s ease;
              width: 100%;
            }

            input[type="submit"]:hover {
              background-color: #8d47d6;
            }

            /* ---------- RESULTADOS ---------- */
            .resultados {
              background: #fff;
              padding: 25px 35px;
              border-radius: 15px;
              box-shadow: 0 0 10px rgba(0,0,0,0.1);
              width: 400px;
              text-align: center;
              margin-top: 30px;
              color: #333;
            }

            .resultados p {
              font-size: 1.1rem;
              margin: 10px 0;
            }

            .resultados span {
              color: #8d47d6;
              
              font-weight: bold;
            }



        </style>
    </head>
    <body>
        
        <h1>Alejandro De la Huerga</h1>
        <h2>Ejercicio 24</h2>
        
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 24/10/2025
        * 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
              recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
              respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas
        */
            
            require_once '../core/231018libreriaValidacion.php'; //Importación de libreria para la validación de los campos.
            
            // Array que almacena los errores.
            $aErrores = [
                'nombre' => '',
                'edad' => ''
            ]; 
            
            // Array que almacena las respuestas.
            $aRespuestas=[
                'nombre' => '', 
                'edad' => ''
            ]; 
            
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
                
                // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                echo ("<div class=resultados>");
                    foreach($aRespuestas as $campo => $valor){
                        print("Su $campo es: ". $valor ."<br/>");
                    }
                echo("</div>");
                
            }else{ // Si no se ha ingresado correctamente volvemos a mostrar el formulario
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <label for="nombre">Nombre:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="nombre"  
                           value='<?php echo (empty($aErrores['nombre'])) ? ($_REQUEST['nombre'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['nombre']?>  </a>
                </label>
                <br/>
                <label for="edad">Edad:
                    <input type="text" name="edad"  
                           value='<?php echo (empty($aErrores['edad'])) ? ($_REQUEST['edad'] ?? '') : ''; ?>'/>
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
