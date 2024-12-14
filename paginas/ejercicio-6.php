<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <center><h3>Aspect ratio de una imagen</h3></center>
    <hr>
    <p>Crea un programa que se encargue de calcular el aspect ratio de una imagen a partir de una URL.</p>

    <form action="" method="POST">
        <b>Ingrese la URL: </b><input type="text" name="img" class="form-control" required><br>
        <button type="submit" class="btn btn-success">Calcular Aspect Ratio</button>
    </form>

    <?php
    // Mostrar errores para depuración
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['img'])) {
        $archivo = $_POST['img'];

        // Intentar obtener las dimensiones de la imagen
        try {
            $dimensiones = @getimagesize($archivo);

            if ($dimensiones) {
                $ancho = $dimensiones[0];
                $alto = $dimensiones[1];
                $ratio = gcd($ancho, $alto); // Calcular MCD
                $aspectRatio = ($ancho / $ratio) . ":" . ($alto / $ratio);

                echo "<br><br><b>Dimensiones:</b> $ancho x $alto px";
                echo "<br><b>Aspect Ratio:</b> $aspectRatio";
            } else {
                echo "<br><br><b>Error:</b> No se pudo obtener información de la imagen. Verifique la URL.";
            }
        } catch (Exception $e) {
            echo "<br><br><b>Error:</b> " . $e->getMessage();
        }
    }

    // Función para calcular el máximo común divisor
    function gcd($a, $b) {
        return ($b == 0) ? $a : gcd($b, $a % $b);
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
