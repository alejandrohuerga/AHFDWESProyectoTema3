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
        <header class="header">
            <h1>Ejercicio 06</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author: Alejandro De la Huerga
                 * @since 04/11/2025
                 * 
                 */
                //Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
                // Establecer la zona horaria 
                date_default_timezone_set('Europe/Madrid');
                $ofecha = new DateTime();
                // Establecer el locale (idioma) en español
                setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                https://www.php.net/manual/es/class.dateinterval.php
                //Intervalo de días

                $intervalo = new DateInterval('P60D');

                $ofecha->add($intervalo);
                echo('<br><br><h3>Fecha dentro de 60 días</h3> ');
                echo( "<p>La fecha de hoy es :<span> " . $ofecha->format("l") . " " . $ofecha->format("d") . " de " . $ofecha->format("F") . " de " . $ofecha->format("o") . " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>');

                echo('<br><br><h3>Usando el timestamp de DateTime y strftime, los dias y los meses están en español</h3> ');
                echo "<p>La fecha dentro de 60 días será : <span>" . strftime("%A %d de %B de %Y", $ofecha->getTimestamp()) .
                " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>';
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Alejandro De la Huerga.</a> Fecha de Actualización :
                        <time datetime="2025-11-04"></time> 04-11-2025 </address>
                </div>

            </div>

        </footer>
    </body>
</html>
