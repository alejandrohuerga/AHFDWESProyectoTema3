<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 21 - Alejandro De la Huerga</title>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html, body {
                height: 100%;
            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                
            }

            header {
                text-align: center;
                justify-content: center;
                display: flex;
                flex-direction: column;
                background: lightblue;
                width: 100%;
                height: 120px;
            }

            /* Contenedor para centrar el formulario */
            main {
                flex: 1; /* Ocupa todo el espacio libre debajo del header */
                display: flex;
                justify-content: center; /* Centrado horizontal */
                align-items: center;     /* Centrado vertical */
            }

            .formulario {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                border: 2px solid black;
                width: 700px;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                background: lightblue;
            }

            h2 {
                margin-bottom: 30px;
            }
            
            label{
                font-size: 27px;
            }
            
            input{
                width: 200px;
                height: 30px;
                margin-left: 25px;
            }
            
            footer{
                background-color: lightblue;
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
            <h2>Ejercicio 21</h2>
        </header>
        <main>
            <section class="formulario">
                <h2>Formulario registro de datos del usuario</h2>

                <!-- Documentación sobre formularios https://www.php.net/manual/en/tutorial.forms.php -->

                <form name="formularioDatosUsuario" action="Tratamiento.php" method="post">

                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre"/><br><br> 


                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad"/><br><br>

                    <input type="submit" value="Enviar">
                </form>
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
