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
            
            html, body {
                height: 100%;
            }
            
            header{
                background-color: lightgray;
                flex-direction: column;
                display: flex;
                width: 100%;
                height: 140px;
                justify-content: center;
                margin-bottom: 80px;
            }

            body {
              background: radial-gradient(circle, rgba(250,197,238,1) 0%, rgba(228,177,250,1) 100%);
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: space-between;
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
                width: 700px;
                margin-top: 20px;
                text-align: left;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            /* Cada grupo de label + input en una fila */
            label {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 15px;
                font-weight: bold;
                color: #222;
            }

            /* Inputs del formulario */
            input[type="text"] {
                flex: 1;
                padding: 8px 10px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-size: 1rem;
                transition: all 0.2s ease;
            }

            /* Inputs de solo lectura (fecha) */
            input[type="date"][disabled] {
                background-color: #f0f0f0;
                color: #666;
                border: 2px solid #ccc;
                flex: 1;
            }

            /* Mensajes de error */
            a[style*="color:red"] {
                font-size: 0.85rem;
                color: red !important;
                margin-left: 10px;
            }

            /* Campo amarillo (obligatorio) */
            input[style*="lightgoldenrodyellow"] {
                background-color: lightgoldenrodyellow !important;
            }

            /* Botón de envío centrado */
            .botones {
                display: flex;
                justify-content: center;
                margin-top: 10px;
            }

            input[type="submit"] {
                background-color: #b56eea;
                color: white;
                font-weight: bold;
                border: none;
                border-radius: 8px;
                padding: 10px 20px;
                cursor: pointer;
                transition: background 0.2s ease;
                width: auto;
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
               /* margin-top: 20px;*/
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

            footer{
                background-color: lightgray;
                width: 100%;
                height: 120px;
                margin-top: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 30px;
            }
            
            footer img{
                width: 50px;
                height: 50px;
            }

        </style>
    </head>
    <body>
        <header>
            <h1>Alejandro De la Huerga</h1>
            <h2>Ejercicio 24</h2>
        </header>
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 24/10/2025
        * 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
              recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
              respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas
        */
            
            require_once '../core/231018libreriaValidacion.php'; //Importación de libreria para la validación de los campos.
            
            // Array que almacena los errores
            
                $aErrores=[
                    'T02_CodDepartamento' =>'',
                    'T02_DescDepartamento' =>'',
                    'T02_VolumenDeNegocio'=>'',  
                ];
            
            // Array que almacena las respuestas , inicializadas a null
            
                $aRespuestas=[
                    'T02_CodDepartamento' =>null,
                    'T02_DescDepartamento' =>null,
                    'T02_VolumenDeNegocio'=>null,   
                ];
                
                define('OBLIGATORIO',1); // Constante booleana que define que un campo es obligatorio.
                $entradaOK=true; //Variable booleana que valida que la entrada esta bien , inicializada a true.
            
                if(isset($_REQUEST['enviar'])){ // código que se ejecuta cuando se envia el formulario.
                    
                    $aErrores['T02_CodDepartamento']= validacionFormularios::comprobarAlfabetico($_REQUEST['T02_CodDepartamento'], 3, 3, OBLIGATORIO);
                    $aErrores['T02_DescDepartamento']= validacionFormularios::comprobarAlfabetico($_REQUEST['T02_DescDepartamento'], 255, 1, OBLIGATORIO);
                    $aErrores['T02_VolumenDeNegocio']= validacionFormularios::comprobarFloat($_REQUEST['T02_VolumenDeNegocio'], PHP_FLOAT_MAX, 0, OBLIGATORIO);
                    
                    
                // Si en el array de errores encuentra un error la variable entradaOK pasa a un valor false.
                
                    foreach ($aErrores as $campo => $valor) {
                        if($valor!=null){ // Si ha habido algun error $entradaOK es falso.
                            $entradaOK=false;
                        }else{
                            $aRespuestas[$campo]=$_REQUEST[$campo]; // Guardamos el dato correcto en el array de Respuestas.
                        }
                    }   
                    
                }else{
                    $entradaOK=false; // Si el formulario no se ha rellenado nunca.
                }
                
            // Tratamiento del formulario.
            if($entradaOK){ // Si los datos han sido ingresados correctamente.
            
                //Rellenamos el array de respuestas con los valores ingresados.
                
                $aRespuestas['T02_CodDepartamento']=$_REQUEST['T02_CodDepartamento'];
                $aRespuestas['T02_DescDepartamento']=$_REQUEST['T02_DescDepartamento'];
                $aRespuestas['T02_VolumenDeNegocio']=$_REQUEST['T02_VolumenDeNegocio'];
                
                echo("<h2>Resultados de la encuenta</h2>");
                // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                echo ("<div class=resultados>");
                
                    foreach($aRespuestas as $campo => $valor){
                        print("Su $campo es: ". $valor ."<br/>");
                    }
                echo("</div>");
                
            }else{ // Si no se ha ingresado correctamente volvemos a mostrar el formulario
        ?>
            <section class="formulario">
            <h2>Inserta un nuevo departamento</h2>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <label for="T02_CodDepartamento">T02_CodDepartamento:
                    <input style="background-color:lightgoldenrodyellow; text-transform: uppercase;" type="text" name="T02_CodDepartamento"  
                           value='<?php echo (empty($aErrores['T02_CodDepartamento'])) ? ($_REQUEST['T02_CodDepartamento'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['T02_CodDepartamento'] ?>  </a>
                </label>
                <br/>
                <label for="T02_DescDepartamento">T02_DescDepartamento:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="T02_DescDepartamento"  
                           value='<?php echo (empty($aErrores['T02_DescDepartamento'])) ? ($_REQUEST['T02_DescDepartamento'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['T02_DescDepartamento'] ?>  </a>
                </label>
                <br/>
                <label for="T02_FechaCreacionDepartamento">T02_FechaCreacionDepartamento:
                    <input style="background-color:lightgrey;" name="T02_FechaCreacionDepartamento" id="T02_FechaCreacionDepartamento" 
                    type="date" value="<?php echo date('Y-m-d'); ?>" disabled>
                </label>
                    <br/>
                <label for="T02_VolumenDeNegocio">T02_VolumenDeNegocio:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="T02_VolumenDeNegocio"  
                            value='<?php echo (empty($aErrores['T02_VolumenDeNegocio'])) ? ($_REQUEST['T02_VolumenDeNegocio'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['T02_VolumenDeNegocio'] ?></a>
                </label>
                <br/>
                <div class="botones">
                    <input type="submit" name="enviar" value="enviar">
                </div>
             </form>
        <?php        
            }
        ?>
        </section>
    </body>
    <footer>
        <a href="../indexProyectoTema3.php">Alejandro De la Huerga Fernández</a>
        <a href="https://github.com/alejandrohuerga/AHFDWESProyectoTema3.git">
            <img src="../doc/images/github-logo.png"> 
        </a>
    </footer>
</html>
