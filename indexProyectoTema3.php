<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="/Proyecto webs alumnos/media/logoSauces.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Alejandro De la Huerga</title>
    <style>
        /* Estilos para centrar y mejorar la tabla */
        table {
            margin: 2rem auto;
            border-collapse: collapse;
            width: 90%;
            max-width: 1200px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #2c3e50;
            color: white;
            padding: 12px;
            text-align: center;
            font-weight: bold;
            white-space: nowrap; /* Los encabezados en una sola línea */
        }

        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }
        /*
        tbody tr:hover {
            background-color: #f5f5f5;
        }
        */
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Ajustar anchos de columnas */
        th:nth-child(1), td:nth-child(1) {
            width: 8%;
            text-align: center;
        }

        th:nth-child(2), td:nth-child(2) {
            width: 82%;
            font-size: 0.9rem;
        }

        th:nth-child(3), td:nth-child(3),
        th:nth-child(4), td:nth-child(4) {
            width: 5%;
            text-align: center;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="../webroot/images/logoSauces.png" alt="logoIesSauces" width="100" height="100">
            <h1><a href="../index.html">Alejandro De la Huerga </a></h1>
        </div>
        
    </header>
    <main>
        
        <table>
  <thead>
    <tr>
      <th>NUMERO</th>
      <th>ENUNCIADO</th>
      <th>CODIGO PHP</th>
      <th>MOSTRAR CODIGO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>00</td>
      <td>Hola mundo y phpinfo()</td>
      <td>
          <a href="codigoPHP/ejercicio00.php" target="_blank">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio00.php" target="_blank">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>01</td>
      <td>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla</td>
      <td>
          <a href="codigoPHP/ejercicio01.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio01.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>02</td>
      <td> Inicializar y mostrar una variable heredoc</td>
      <td>
          <a href="codigoPHP/ejercicio02.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio02.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>03</td>
      <td>Mostrar en tu página index la fecha y hora actual formateada en castellano.(DateTime)</td>
      <td>
          <a href="codigoPHP/ejercicio03.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio03.php">
              <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>04</td>
      <td>Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués</td>
      <td>
          <a href="codigoPHP/ejercicio04.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio04.php">
              <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>05</td>
      <td>Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp</td>
      <td>
          <a href="codigoPHP/ejercicio05.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio05.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>06</td>
      <td>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
      <td>
          <a href="codigoPHP/ejercicio06.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio06.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>07</td>
      <td>Mostrar el nombre del fichero que se está ejecutando.</td>
      <td>
          <a href="codigoPHP/ejercicio07.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio07.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>08</td>
      <td>Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
      <td>
          <a href="codigoPHP/ejercicio08.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio08.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>09</td>
      <td> Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
      <td>
          <a href="codigoPHP/ejercicio09.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio09.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>10</td>
      <td>Mostrar el contenido del fichero que se está ejecutando.</td>
      <td>
          <a href="codigoPHP/ejercicio10.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio10.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>11</td>
      <td>Mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o ApiGen</td>
      <td>Ejecutar</td>
      <td>mostrar codigo</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</td>
      <td>
          <a href="codigoPHP/ejercicio12.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio12.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>13</td>
      <td>Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.</td>
      <td>
          <a href="codigoPHP/ejercicio13.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio13.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>14</td>
      <td>Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la
          forma de usarla en el entorno de desarrollo y en el de explotación</td>
      <td>Ejecutar</td>
      <td>mostrar codigo</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Crear e inicializar un array con el sueldo percibido de lunes a domingo.Recorrer el array para calcular el sueldo percibido durante la
          semana.</td>
      <td>
          <a href="codigoPHP/ejercicio15.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio15.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>16</td>
      <td>Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
      <td>
          <a href="codigoPHP/ejercicio16.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio16.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>17</td>
      <td>Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
          asiento en un teatro de 20 filas y 15 asientos por fila. </td>
      <td>
          <a href="codigoPHP/ejercicio17.php">
            <button>Ejecutar</button>
          </a>
      </td>
      <td>
          <a href="mostrarcodigo/muestraEjercicio17.php">
            <button>Mostrar Codigo</button>
          </a>
      </td>
    </tr>
    <tr>
      <td>18</td>
      <td>Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
      <td>Ejecutar</td>
      <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Construir una librería de funciones de validación de campos de formularios (LibreríaValidacionFormularios.php)</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Convertir la LibreriaValidacionFormularios.php en una clase ValidacionFormularios.php</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Formulario cuestionario que envía datos a Tratamiento.php para mostrar preguntas y respuestas</td>
        <td>
            <a href="codigoPHP/ejercicio21.php">
                <button>Ejecutar</button>
            </a>
        </td>
        <td>
            <a href="mostrarcodigo/muestraEjercicio21.php">
                <button>Mostrar Codigo</button>
            </a>
        </td>
    </tr>
    <tr>
        <td>22</td>
        <td>Formulario cuestionario que muestra preguntas y respuestas en la misma página</td>
        <td>
            <a href="codigoPHP/ejercicio22.php">
                <button>Ejecutar</button>
            </a>
        </td>
        <td>
            <a href="mostrarcodigo/muestraEjercicio22.php">
                <button>Mostrar Codigo</button>
            </a>
        </td>
    </tr>
    <tr>
        <td>23</td>
        <td>Formulario con validación que vuelve a mostrar el formulario si hay respuestas vacías o erróneas</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>24</td>
        <td>Formulario con validación que mantiene las respuestas correctas al recargar por errores</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>25</td>
        <td>Trabajar en PlantillaFormulario.php, plantilla para hacer formularios rápidamente</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
    <tr>
        <td>26</td>
        <td>Formulario que recoge temperatura y presión atmosférica en fechas y genera informe con promedios, mínimos y máximos</td>
        <td>Ejecutar</td>
        <td>mostrar codigo</td>
    </tr>
  </tbody>
</table>
        </div>
    </main>
    <footer>
        <p><a href="../index.html">&copy; 2024 Alejandro De la Huerga. Todos los derechos reservados.</a></p>
    </footer>
</body>
</html>