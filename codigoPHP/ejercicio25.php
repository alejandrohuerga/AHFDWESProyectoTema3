<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Plantilla de formularios - Alejandro De la Huerga</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css"/>
    </head>
    <body>
        <header>
            <h1>Alejandro De la Huerga Fernández</h1>
        </header>
        <h2>Plantilla de formularios</h2>
        <?php
        
        /**
        * @author: Alejandro De la Huerga
        * @since: 05/11/2025
        * 25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
        */
            require_once '../core/231018libreriaValidacion.php';
            
            // Array que almacena las diferentes extensiones de archivos.
            
            $aExtensiones=[
                '.png',
                '.jpg',
                '.pdf',
                '.word',
                '.gif'
            ];
            // Array que almacena los errores tanto obligatorios como opcionales.
            
            $aErrores=[
                'alfabeticoOb' =>'',
                'alfabeticoOp' =>'',
                'alfanumericoOb'=>'',
                'alfanumericoOp'=>'',
                'enteroOb'=>'',
                'enteroOp'=>'',
                'floatOb'=>'',
                'floatOp'=>'',
                'emailOb'=>'',
                'emailOp'=>'',
                'urlOb'=>'',
                'urlOp'=>'',
                'fechaOb'=>'',
                'fechaOp'=>'',
                'dniOb'=>'',
                'dniOp'=>'',
                'cpOb'=>'',
                'cpOp'=>'',
                'passwordOb'=>'',
                'passwordOp'=>'',
                'elementoLista'=>'',
                'radio'=>'',
                'checkbox'=>'',
                'telefonoOb'=>'',
                'telefonoOp'=>'',
                'nombreArchivoOp'=>''  
            ];
            
            // Array que almacena las respuestas , inicializadas a null.
            
            $aRespuestas=[
                'alfabeticoOb' =>null,
                'alfabeticoOp' =>null,
                'alfanumericoOb'=> null,
                'alfanumericoOp'=> null,
                'enteroOb'=> null,
                'enteroOp'=>null,
                'floatOb'=> null,
                'floatOp'=> null,
                'emailOb'=>null,
                'emailOp'=>null,
                'urlOb'=>null,
                'urlOp'=>null,
                'fechaOb'=>null,
                'fechaOp'=>null,
                'dniOb'=>null,
                'dniOp'=>null,
                'cpOb'=>null,
                'cpOp'=>null,
                'passwordOb'=>null,
                'passwordOp'=>null,
                'elementoLista'=>null,
                'radio'=>null,
                'checkbox'=>null,
                'telefonoOb'=>null,
                'telefonoOp'=>null,
                'nombreArchivoOp'=>null 
            ];
            
            define('MAX',255); // Constante que define el tamaño maximo de un campo (255).
            define('MIN',0); // Constante que define el tamaño minimo de un campo (0).
            define('OBLIGATORIO',1); // Constante booleana que define que un campo es obligatorio.
            
            $entradaOK=true; //Variable booleana que valida que la entrada esta bien , inicializada a true.
            $aRespuestasLista=['opcion1','opcion2','opcion3']; // Array que almacena las posibles respuestas de una lista.
            $_REQUEST['radio'] = $_REQUEST['radio'] ?? null;
            $_REQUEST['checkbox'] = $_REQUEST['checkbox'] ?? [];
            if(isset($_REQUEST['enviar'])){ // código que se ejecuta cuando se envia el formulario.
                
                // Valimos los datos para cada campos del formulario.
                
                $aErrores['alfabeticoOb']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOb'], MAX, MIN, OBLIGATORIO);
                $aErrores['alfabeticoOp']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOp'], MAX, MIN);
                $aErrores['alfanumericoOb']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOb'], MAX, MIN, OBLIGATORIO);
                $aErrores['alfanumericoOp']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOp'], MAX, MIN);
                $aErrores['enteroOb']= validacionFormularios::comprobarEntero($_REQUEST['enteroOb'], MAX, MIN, OBLIGATORIO);
                $aErrores['enteroOp']= validacionFormularios::comprobarEntero($_REQUEST['enteroOp'], MAX, MIN);
                $aErrores['floatOb']= validacionFormularios::comprobarFloat($_REQUEST['floatOb'], MAX, MIN, OBLIGATORIO);
                $aErrores['floatOp']= validacionFormularios::comprobarFloat($_REQUEST['floatOp'], MAX, MIN);
                $aErrores['emailOb']= validacionFormularios::validarEmail($_REQUEST['emailOb'],OBLIGATORIO);
                $aErrores['emailOp']= validacionFormularios::validarEmail($_REQUEST['emailOp']);
                $aErrores['urlOb']= validacionFormularios::validarURL($_REQUEST['urlOb'],OBLIGATORIO);
                $aErrores['urlOp']= validacionFormularios::validarURL($_REQUEST['urlOp']);
                $aErrores['fechaOb']= validacionFormularios::validarFecha($_REQUEST['fechaOb'],OBLIGATORIO);
                $aErrores['fechaOp']= validacionFormularios::validarFecha($_REQUEST['fechaOp']);
                $aErrores['dniOb']= validacionFormularios::validarDni($_REQUEST['dniOb'],OBLIGATORIO);
                $aErrores['dniOp']= validacionFormularios::validarDni($_REQUEST['dniOp']);
                $aErrores['cpOb']= validacionFormularios::validarCp($_REQUEST['cpOb'],OBLIGATORIO);
                $aErrores['cpOp']= validacionFormularios::validarCp($_REQUEST['cpOp']);
                $aErrores['passwordOb']= validacionFormularios::validarPassword($_REQUEST['passwordOb'],100,2,OBLIGATORIO);
                $aErrores['passwordOp']= validacionFormularios::validarPassword($_REQUEST['passwordOp']);
                $aErrores['fechaOb']= validacionFormularios::validarFecha($_REQUEST['fechaOb'],OBLIGATORIO);
                $aErrores['fechaOp']= validacionFormularios::validarFecha($_REQUEST['fechaOb']);
                $aErrores['elementoLista']= validacionFormularios::validarElementoEnLista($_REQUEST['elementoLista'],$aRespuestasLista);
                $aErrores['radio'] = isset($_REQUEST['radio']) ? validacionFormularios::validarElementoEnLista($_REQUEST['radio'], ['opcionR1','opcionR2','opcionR3']) : null;
                $aErrores['checkbox'] = isset($_REQUEST['checkbox'])? validacionFormularios::validarElementoEnLista($_REQUEST['checkbox'], ['opcionCB1','opcionCB2','opcionCB3']): null;
                $aErrores['telefonoOp']= validacionFormularios::validarTelefono($_REQUEST['telefonoOp'],OBLIGATORIO);
                $aErrores['telefonoOb']= validacionFormularios::validarTelefono($_REQUEST['telefonoOb']);
                $aErrores['nombreArchivoOp']= validacionFormularios::validarNombreArchivo($_REQUEST['nombreArchivoOp'],$aExtensiones,155);
                
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
            
            if($entradaOK){
                $aRespuestas['alfabeticoOb']=$_REQUEST['alfabeticoOb'];
                $aRespuestas['alfabeticoOp']=$_REQUEST['alfabeticoOb'];
                $aRespuestas['alfanumericoOb']=$_REQUEST['alfabeticoOb'];
                $aRespuestas['alfanumericoOp']=$_REQUEST['alfabeticoOp'];
                $aRespuestas['enteroOb']=$_REQUEST['enteroOb'];
                $aRespuestas['enteroOp']=$_REQUEST['enteroOp'];
                $aRespuestas['floatOb']=$_REQUEST['floatOb'];
                $aRespuestas['floatOp']=$_REQUEST['floatOp'];
                $aRespuestas['emailOb']=$_REQUEST['emailOb'];
                $aRespuestas['emailOp']=$_REQUEST['emailOp'];
                $aRespuestas['urlOb']=$_REQUEST['urlOb'];
                $aRespuestas['urlOp']=$_REQUEST['urlOp'];
                $aRespuestas['fechaOb']=$_REQUEST['fechaOb'];
                $aRespuestas['fechaOp']=$_REQUEST['fechaOp'];
                $aRespuestas['dniOb']=$_REQUEST['dniOb'];
                $aRespuestas['dniOp']=$_REQUEST['dniOp'];
                $aRespuestas['cpOb']=$_REQUEST['cpOb'];
                $aRespuestas['cpOp']=$_REQUEST['cpOp'];
                $aRespuestas['passwordOb']=$_REQUEST['passwordOb'];
                $aRespuestas['passwordOp']=$_REQUEST['apasswordOp'];
                $aRespuestas['elementoLista']=$_REQUEST['elementoLista'];
                $aRespuestas['checkbox'] = isset($_REQUEST['checkbox']) ? $_REQUEST['checkbox'] : [];
                $aRespuestas['telefonoOb']=$_REQUEST['telefonoOb'];
                $aRespuestas['telefonoOp']=$_REQUEST['telefonoOp'];
                $aRespuestas['nombreArchivoOp']=$_REQUEST['nombreArchivoOp'];
                
                // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                
                echo ("<div class=resultados>");
                    foreach($aRespuestas as $campo => $valor){
                        print("Su $campo es: ". $valor ."<br/>");
                    }
                echo("</div>");
                        
            }else{ // Si no se ha ingresado correctamente volvemos a mostrar el formulario.
        ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <fieldset>
                <label for="alfabeticoOb">AlfabaeticoOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="alfabeticoOb"  
                           value='<?php echo (empty($aErrores['alfabeticoOb'])) ? ($_REQUEST['alfabeticoOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['alfabeticoOb']?>  </a>
                </label>
                <br/>
                <label for="alfabeticoOp">AlfabaeticoOp:
                    <input type="text" name="alfabeticoOp"  
                           value='<?php echo (empty($aErrores['alfabeticoOp'])) ? ($_REQUEST['alfabeticoOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['alfabeticoOp']?>  </a>
                </label>
                <br/>
                <label for="alfanumericoOb">AlfanumericoOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="alfanumericoOb"  
                           value='<?php echo (empty($aErrores['alfanumericoOb'])) ? ($_REQUEST['alfanumericoOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['alfanumericoOb']?>  </a>
                </label>
                <br/>
                <label for="alfanumericoOp">AlfanumericoOp:
                    <input type="text" name="alfanumericoOp"  
                           value='<?php echo (empty($aErrores['alfanumericoOp'])) ? ($_REQUEST['alfanumericoOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['alfanumericoOp']?>  </a> 
                </label>
                <br/>
                <label for="enteroOb">EnteroOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="enteroOb"  
                           value='<?php echo (empty($aErrores['enteroOb'])) ? ($_REQUEST['enteroOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['enteroOb']?>  </a>
                </label>
                <br/>
                <label for="enteroOp">EnteroOp:
                    <input type="text" name="enteroOp"  
                           value='<?php echo (empty($aErrores['enteroOp'])) ? ($_REQUEST['enteroOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['enteroOp']?>  </a> 
                </label>
                <br/>
                <label for="floatOb">FloatOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="floatOb"  
                           value='<?php echo (empty($aErrores['floatOb'])) ? ($_REQUEST['floatOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['floatOb']?>  </a>
                </label>
                <br/>
                <label for="FloatOp">FloatOp:
                    <input type="text" name="floatOp"  
                           value='<?php echo (empty($aErrores['floatOp'])) ? ($_REQUEST['floatOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['floatOp']?>  </a> 
                </label>
                <br/>
                <label for="emailOb">EmailOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="emailOb"  
                           value='<?php echo (empty($aErrores['emailOb'])) ? ($_REQUEST['emailOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['emailOb']?>  </a>
                </label>
                <br/>
                <label for="emailOp">EmailOp:
                    <input type="text" name="emailOp"  
                           value='<?php echo (empty($aErrores['emailOp'])) ? ($_REQUEST['emailOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['emailOp']?>  </a> 
                </label>
                <br/>
                <label for="urlOb">UrlOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="urlOb"  
                           value='<?php echo (empty($aErrores['urlOb'])) ? ($_REQUEST['urlOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['urlOb']?>  </a>
                </label>
                <br/>
                <label for="urlOp">UrlOp:
                    <input type="text" name="urlOp"  
                           value='<?php echo (empty($aErrores['urlOp'])) ? ($_REQUEST['urlOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['urlOp']?>  </a> 
                </label>
                <br/>
                <label for="fechaOb">FechaOb:
                    <input style="background-color:lightgoldenrodyellow;" type="date" name="fechaOb"  
                           value='<?php echo (empty($aErrores['fechaOb'])) ? ($_REQUEST['fechaOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['fechaOb']?>  </a>
                </label>
                <br/>
                <label for="fechaOp">FechaOp:
                    <input type="date" name="fechaOp"  
                           value='<?php echo (empty($aErrores['fechaOp'])) ? ($_REQUEST['fechaOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['fechaOp']?>  </a> 
                </label>
                <br/>
                <label for="dniOb">DniOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="dniOb"  
                           value='<?php echo (empty($aErrores['dniOb'])) ? ($_REQUEST['dniOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['dniOb']?>  </a>
                </label>
                <br/>
                <label for="dniOp">DniOp:
                    <input type="text" name="dniOp"  
                           value='<?php echo (empty($aErrores['dniOp'])) ? ($_REQUEST['dniOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['dniOp']?>  </a> 
                </label>
                <br/>
                <label for="cpOb">CPOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="cpOb"  
                           value='<?php echo (empty($aErrores['cpOb'])) ? ($_REQUEST['cpOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['cpOb']?>  </a>
                </label>
                <br/>
                <label for="cpOp">FechaOp:
                    <input type="text" name="cpOp"  
                           value='<?php echo (empty($aErrores['cpOp'])) ? ($_REQUEST['cpOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['cpOp']?>  </a> 
                </label>
                <br/>
                <label for="passwordOb">PasswordOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="passwordOb"  
                           value='<?php echo (empty($aErrores['passwordOb'])) ? ($_REQUEST['passwordOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['passwordOb']?>  </a>
                </label>
                <br/>
                <label for="passwordOp">PasswordOp:
                    <input type="text" name="passwordOp"  
                           value='<?php echo (empty($aErrores['passwordOp'])) ? ($_REQUEST['passwordOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['passwordOp']?>  </a> 
                </label>
                <br/>
                <label for="opcionR1">Opcion1
                    <input type="radio" name="radio" id="opcionR1" value="opcionR1"/>
                </label>
                <label for="opcionR2"> Opcion2
                    <input type="radio" name="radio" id="opcionR2" value="opcionR2"/>
                </label>
                <label for="opcionR3"> Opcion3
                    <input type="radio" name="radio" id="opcionR3" value="opcionR3"/>
                </label>
                <br/>
                <label for="opcionCB1">Opcion1
                    <input type="checkbox" name="checkbox[]" id="opcionCB1" value="opcionCB1"/>
                </label>
                <label for="opcionCB2"> Opcion2
                    <input type="checkbox" name="checkbox[]" id="opcionCB2" value="opcionCB2"/>
                </label>
                <label for="opcionCB3"> Opcion3
                    <input type="checkbox" name="checkbox[]" id="opcionCB3" value="opcionCB3"/>
                </label>
                <br/>
                <label for="listaOpciones">
                    Seleccione una opcion
                    <select name="elementoLista" id="select">
                        <option id="opcionS1" value="opcion1">Opcion 1</option>
                        <option id="opcionS2" value="opcion2">Opcion 2</option>
                        <option id="opcionS3" value="opcion3">Opcion 3</option>
                    </select>
                </label>
                <br/>
                <label for="telefonoOb">TelefonoOb:
                    <input style="background-color:lightgoldenrodyellow;" type="text" name="telefonoOb"  
                           value='<?php echo (empty($aErrores['telefonoOb'])) ? ($_REQUEST['telefonoOb'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['telefonoOb']?>  </a>
                </label>
                <br/>
                <label for="telefonoOp">TelefonoOp:
                    <input type="text" name="telefonoOp"  
                           value='<?php echo (empty($aErrores['telefonoOp'])) ? ($_REQUEST['telefonoOp'] ?? '') : ''; ?>'/>
                    <a style=color:red;> <?php echo $aErrores['telefonoOp']?>  </a> 
                </label>
                <br/>
                <label for="nombreArchivoOp">Archivo opcional:
                    <input type="file" name="nombreArchivoOp"  
                            value='<?php echo (empty($aErrores['nombreArchivoOp'])) ? ($_REQUEST['nombreArchivoOp'] ?? '') : ''; ?>'/>
                    <a style="color:red;"><?php echo $aErrores['nombreArchivoOp'] ?></a>
                </label>
                <br/>
                </fieldset>
                <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
            }
        ?>
    </body>
</html>
