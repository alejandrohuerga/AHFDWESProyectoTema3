<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22 - Alejandro De la Huerga</title>
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
            
            main{
                height: 70vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            
            header{
                width: 100%;
                height: 130px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background-color: lightseagreen;
            }
            
            .respuestas{
                font-size: 1.2rem;
            }
            
            .respuestas h2{
                margin-bottom: 30px;
            }
            
            
            
            section{
                border: 1px solid black;
                padding: 50px;
                background-color: lightblue;
                
            }
            
            form label{
                font-size: 1.2rem;
            }
            
            form input{
                width: 200px;
                height: 30px;
            }
            
            #edad{
                width: 70px;
            }
            
            
            form h2{
                margin-bottom: 30px;
                
            }
            
            footer{
                width: 100%;
                height: 90px;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 40px;
                background: lightseagreen;
            }
            
            footer img{
                width: 40px;
                height: auto;
            }
            
            form input[type="submit"] {
                display: block;
                margin: 20px auto 0 auto; /* margen superior de 20px y centrado horizontal */
                width: 120px;
                height: 35px;
                background-color: lightseagreen;
                border: none;
                color: white;
                font-weight: bold;
                border-radius: 5px;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            form input[type="submit"]:hover {
                background-color: seagreen;
            }
            
        </style>
    </head>
    <body>
        <header> 
            <h1>Alejandro De la Huerga</h1>
            <h2>Ejercicio 22</h2>
        </header>
        <main>
            
        <section class="formulario">
            
        <?php
        
            /**
            * @author: Alejandro De la Huerga
            * @since: 20/10/2025
            * 22.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                recogidas.
            */
        
            echo('<div class=respuestas>');
                if (isset($_REQUEST['enviar'])) { //Código que se ejecuta cuando se envía el formulario
                       echo('<h2>Respuestas del formulario</h2>');
                       print "Su nombre es: $_REQUEST[nombre]<br>";
                       print "Su edad es: $_REQUEST[edad]<br/>";
                } else { //Código que se ejecuta antes de rellenar el formulario
            echo('<div/>');
    ?>
            <form name="formulario" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
                <h2>Rellene el siguiente formulario</h2>
                <label for="nombre">Nombre:
                    <input style="background: lightgoldenrodyellow;" type="text" name="nombre">
                </label><br>
                <br/>
                <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad"/><br><br>
                <br/>
                    <input type="submit" name="enviar" value="enviar">
            </form>
        <?php
            }
        ?>
        </section>
        </main>
    </body>
    <footer>
        <a href="../indexProyectoTema3.php">Alejandro De la Huerga Fernández</a>
        <a href="https://github.com/alejandrohuerga/AHFDWESProyectoTema3.git">
            <img src="../doc/images/github-logo.png"> 
        </a>
    </footer>
</html>
