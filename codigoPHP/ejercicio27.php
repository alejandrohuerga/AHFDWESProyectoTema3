<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 27 - Alejandro De la Huerga</title>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: "Segoe UI", sans-serif;
            }

            /* Fondo */
            body {
                background-color: #f0f0f0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            /* Encabezado */
            header {
                text-align: center;
                background-color: #f6c1ce;
                width: 100%;
                padding: 20px 0;
                border-bottom: 2px solid #d894a6;
            }

            header h1 {
                font-size: 1.8rem;
            }

            h2 {
                margin: 20px 0;
                text-align: center;
                color: #333;
            }

            /* Contenedor principal */
            main {
                background-color: white;
                border: 2px solid #d0d0d0;
                border-radius: 10px;
                padding: 25px 40px;
                width: 90%;
                max-width: 1000px;
                margin-bottom: 40px;
            }

            /* Formulario */
            form {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            fieldset {
                border: 2px solid #000;
                padding: 20px;
                background-color: #fff;
            }

            /* Etiquetas principales */
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 8px;
                color: #000;
            }

            /* Inputs y select */
            input[type="text"],
            select,
            textarea {
                background-color: #fffacd; /* Amarillo suave */
                border: 1px solid #000;
                padding: 5px;
                font-size: 1rem;
                width: auto;
                min-width: 200px;
            }

            /* Textarea */
            textarea {
                width: 100%;
                height: 70px;
                resize: none;
            }

            /* Radios alineados */
            .contenedorRadio {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                gap: 20px;
                margin-top: 10px;
            }

            .labels {
                
                display: flex;
                flex-direction: column;
                gap: 10px;
                font-weight: normal;
                color: #000;
            }
            
            .labels label{
                margin-bottom: 7px;
            }

            .radios {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            
            .radios input{
                margin-bottom: 15px;
            }
            
            input[name="nombreApellidosOb"]{
                width: 600px;
            }

            /* Botón enviar */
            input[type="submit"] {
                background-color: #d3f3d3;
                border: 1px solid #000;
                padding: 5px 30px;
                cursor: pointer;
                font-weight: bold;
                color: green;
                display: block;              /* lo hacemos bloque */
                margin: 20px auto 0 auto;    /* centrado horizontal */
                border-radius: 5px;
            }

            input[type="submit"]:hover {
                background-color: #b2ebb2;
            }

            /* Resultados finales */
            .resultados {
                background-color: #fffacd;
                border: 2px solid #000;
                padding: 15px;
                margin-top: 20px;
                border-radius: 5px;
                text-align: left;
                color: #000;
                line-height: 1.6;
            }
            
            select {
                background-color: #fffacd;
                border: 1px solid #000;
                padding: 5px;
                font-size: 1rem;
                width: auto; /* Deja que el select use su tamaño natural */
            }

        </style>
    </head>
    <body>
        <header>
            <h1>Alejandro De la Huerga Fernández</h1>
            
        </header>
        <h2>Ejercicio 27</h2>
        <main>
        <?php
        /**
        * @author: Alejandro De la Huerga
        * @since: 06/11/2025
        * Modificar la plantilla para el desarrollo de un formulario que recoja y genere el siguiente informe con los datos que se muestran a
          continuación:
        */
        
            require_once '../core/231018libreriaValidacion.php'; // Importamos la libreria de validacion.
            
            // Array que almacena los errores
            
            $aErrores=[
                'nombreApellidosOb' =>'',
                'fechaNacimientoOb' =>'',
                'radioAnimoOb'=>'',
                'cursoEnteroOb'=>'',
                'listaVacacionesOb'=>'',
                'descripcionAnimoOb'=>''
            ];
            
            // Array que almacena las respuestas , inicializadas a null
            
            $aRespuestas=[
                'nombreApellidosOb' => null,
                'fechaNacimientoOb' =>null,
                'radioAnimoOb'=>null,
                'cursoEnteroOb'=>null,
                'listaVacacionesOb'=>null,
                'descripcionAnimoOb'=>null
            ];
            
            define('MAX',255); // Constante que define el tamaño maximo de un campo (255).
            define('MIN',0); // Constante que define el tamaño minimo de un campo (0).
            define('OBLIGATORIO',1); // Constante booleana que define que un campo es obligatorio.
            $entradaOK=true; //Variable booleana que valida que la entrada esta bien , inicializada a true.
            
            if(isset($_REQUEST['enviar'])){ // código que se ejecuta cuando se envia el formulario.
                
                $aErrores['nombreApellidosOb']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombreApellidosOb'], MAX, MIN, OBLIGATORIO);
                $aErrores['fechaNacimientoOb']= validacionFormularios::validarFecha($_REQUEST['fechaNacimientoOb'], '01/01/2025', '01/10/1900',OBLIGATORIO);
                $aErrores['cursoEnteroOb']= validacionFormularios::comprobarEntero($_REQUEST['cursoEnteroOb'], 10, 1, OBLIGATORIO);
                $aErrores['listaVacacionesOb'] = validacionFormularios::comprobarAlfabetico($_REQUEST['listaVacacionesOb'], 100, 1, OBLIGATORIO);
                $aErrores['descripcionAnimoOb']= validacionFormularios::comprobarAlfabetico($_REQUEST['descripcionAnimoOb'], MAX, MIN, OBLIGATORIO);
                // Si en el array de errores encuentra un error la variable entradaOK pasa a un valor false.
                
                foreach ($aErrores as $campo => $valor) {
                    if($valor!=null){ // Si ha habido algun error $entradaOK es falso.
                        $entradaOK=false;
                    }else{
                        $aRespuestas[$campo]=$_REQUEST[$campo]; // Guardamos el dato correcto en el array de Respuestas.
                    }
                }
                
                // Obtenemos fecha y hora actual
                
                date_default_timezone_set('Europe/Madrid');
                $fechaActual = new DateTime();
                $diaSemana = $fechaActual->format('l');
                $dia = $fechaActual->format('d');
                $mes = $fechaActual->format('F');
                $hora = $fechaActual->format('H:i');
                
                // Traducir día y mes al español
                $dias = [
                    'Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miércoles',
                    'Thursday' => 'Jueves', 'Friday' => 'Viernes', 'Saturday' => 'Sábado', 'Sunday' => 'Domingo'
                ];
                
                $meses = [
                    'January' => 'enero', 'February' => 'febrero', 'March' => 'marzo',
                    'April' => 'abril', 'May' => 'mayo', 'June' => 'junio',
                    'July' => 'julio', 'August' => 'agosto', 'September' => 'septiembre',
                    'October' => 'octubre', 'November' => 'noviembre', 'December' => 'diciembre'
                ];
                
                $diaSemanaEsp = $dias[$diaSemana];
                $mesEsp = $meses[$mes];
                
                
                // Calculamos la edad , restando la fecha actual a la ingresada con el método diff.
                
                $fechaNacimiento = DateTime::createFromFormat('d/m/Y', $aRespuestas['fechaNacimientoOb']);
                
                if ($fechaNacimiento) {
                    $edad = $fechaNacimiento->diff($fechaActual)->y;
                } else {
                    $edad = "desconocida";
                }
                
                // Mostrar texto con el formato dado en el documento.
                
                echo "<div class='resultados'>";
                echo "Hoy ($diaSemanaEsp, $dia de $mesEsp) a las $hora.<br>";
                echo "D. <strong>{$aRespuestas['nombreApellidosOb']}</strong>, nacido hace <strong>$edad</strong> años, se siente <strong>{$aRespuestas['radioAnimoOb']}</strong>.<br>";
                echo "Valora su curso actual con <strong>{$aRespuestas['cursoEnteroOb']}</strong> sobre 10.<br>";
                echo "Estas navidades las dedicará a <strong>{$aRespuestas['listaVacacionesOb']}</strong>.<br>";
                echo "Y, además, opina que:<br>";
                echo nl2br("<em>{$aRespuestas['descripcionAnimoOb']}</em>");
                echo "</div>";
                
            }else{
                $entradaOK=false; // Si el formulario no se ha rellenado nunca.
            }
            
            // Tratamiento del formulario
            
            if($entradaOK){
                // Rellenamos el array de respuestas
                
                $aRespuestas['nombreApellidosOb']=$_REQUEST['nombreApellidosOb'];
                $aRespuestas['fechaNacimientoOb']=$_REQUEST['fechaNacimientoOb'];
                $aRespuestas['radioAnimoOb']=$_REQUEST['radioAnimoOb'];
                $aRespuestas['cursoEnteroOb']=$_REQUEST['cursoEnteroOb'];
                $aRespuestas['listaVacacionesOb']=$_REQUEST['listaVacacionesOb'];
                $aRespuestas['descripcionAnimoOb']=$_REQUEST['descripcionAnimoOb'];
                
                // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                
                echo ("<div class=resultados>");
                    foreach($aRespuestas as $campo => $valor){
                        print("Su $campo es: ". $valor ."<br/>");
                    }
                echo("</div>");
            }else{
                 // Si no se ha ingresado correctamente volvemos a mostrar el formulario.
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <fieldset>
                <label for="nombreApellidosOb">Nombre y apellidos del alumno:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="nombreApellidosOb"  
                           value='<?php echo (empty($aErrores['nombreApellidosOb'])) ? ($_REQUEST['nombreApellidosOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['nombreApellidosOb']?>  </a>
                </label>
                <br/>
                
                <label for="fechaNacimientoOb">Fecha de nacimiento:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="fechaNacimientoOb"  
                           value='<?php echo (empty($aErrores['fechaNacimientoOb'])) ? ($_REQUEST['fechaNacimientoOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['fechaNacimientoOb']?>  </a>
                </label>
                <br/>
                
                <label for="radioAnimoOb">¿Como te sientes hoy?</label><br/>
                <div class="contenedorRadio">
                    <div class="labels">
                        <label for="muyMal">MUY MAL</label>
                        <label for="mal">MAL</label>
                        <label for="regular">REGULAR</label>
                        <label for="bien">BIEN</label>
                        <label for="muyBien">MUY BIEN</label>
                    </div>
                    <div class="radios">
                        <input type="radio" id="muyMal" name="radioAnimoOb" value="muyMal"
                                <?php if (isset($_REQUEST['radioAnimoOb']) && $_REQUEST['radioAnimoOb'] === 'muyMal') echo 'checked'; ?>>
                        <input type="radio" id="mal" name="radioAnimoOb" value="mal"
                                <?php if (isset($_REQUEST['radioAnimoOb']) && $_REQUEST['radioAnimoOb'] === 'mal') echo 'checked'; ?>>
                        <input type="radio" id="regular" name="radioAnimoOb" value="regular"
                                <?php if (isset($_REQUEST['radioAnimoOb']) && $_REQUEST['radioAnimoOb'] === 'regular') echo 'checked'; ?>>
                        <input type="radio" id="bien" name="radioAnimoOb" value="bien"
                                <?php if (isset($_REQUEST['radioAnimoOb']) && $_REQUEST['radioAnimoOb'] === 'bien') echo 'checked'; ?>>
                        <input type="radio" id="muyBien" name="radioAnimoOb" value="muyBien"
                                <?php if (isset($_REQUEST['radioAnimoOb']) && $_REQUEST['radioAnimoOb'] === 'muyBien') echo 'checked'; ?>>
                    </div>
                    <br/>
                </div>
                
                <label for="cursoEnteroOb">¿Cómo va el curso? [0-10]:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="cursoEnteroOb"  
                           value='<?php echo (empty($aErrores['cursoEnteroOb'])) ? ($_REQUEST['cursoEnteroOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['cursoEnteroOb']?>  </a>
                </label>
                <br/>
                
                <label for="listaVacacionesOb">¿Como se presentan las vacaciones de navidad?</label><br/>
                <select name="listaVacacionesOb" id="listaVacacionesOb">
                    <option value="Ni idea">Ni idea</option>
                    <option value="Con la familia">Con la familia</option>
                    <option value="De fiesta">De fiesta</option>
                    <option value="Trabajando">Trabajando</option>
                    <option value="Estudiando DWES">Estudiando DWES</option>
                </select><br/>
                
                <label for="descripcionAnimoOb">Describe brevemente tu estado de ánimo:
                    <textarea style="background-color:lightgoldenrodyellow;" type="texta" name="descripcionAnimoOb"  
                              value='<?php echo (empty($aErrores['descripcionAnimoOb'])) ? ($_REQUEST['descripcionAnimoOb'] ?? '') : ''; ?>'></textarea>
                    <a style=color:red;> <?php echo $aErrores['descripcionAnimoOb']?>  </a>
                </label>
                
                <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
            }
        ?>
        </main>
    </body>
</html>
