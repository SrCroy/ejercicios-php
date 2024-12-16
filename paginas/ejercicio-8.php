<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <center><h3>Contando letras</h3></center>
    <hr>
    <p>Crea un programa que cuente cuantas veces se repite cada palabra
        <br>y que muestre el recuento final de todas ellas.
        <br>Los signos de puntuación no forman parte de la palabra.
        <br>Una palabra es la misma aunque aparezca en mayúsculas y minúsculas.
        <br>No se pueden utilizar funciones propias del lenguaje que
        <br>lo resuelvan automáticamente.</p>

    <form action="" method="POST">
        <b>Ingrese la palabra: </b><input type="text" name="palabra" class="form-control" required><br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $palabra = strtolower($_POST['palabra']);
            $letras = str_split($palabra);
        
            $conteo = [];
            foreach ($letras as $letra) {
                if (ctype_alpha($letra)) {
                    if (isset($conteo[$letra])) {
                        $conteo[$letra]++;
                    } else {
                        $conteo[$letra] = 1;
                    }
                }
            }
        
            echo "<h4>Recuento de letras:</h4>";
            echo "<ul>";
            foreach ($conteo as $letra => $cantidad) {
                echo "<li>Letra '$letra': $cantidad veces</li>";
            }
            echo "</ul>";
        }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
