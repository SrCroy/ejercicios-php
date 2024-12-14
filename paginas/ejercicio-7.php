<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <center><h3>Invirtiendo palabra</h3></center>
    <hr>
    <p> Crea un programa que invierta el orden de una cadena de texto
        <br>sin usar funciones propias del lenguaje que lo hagan de forma automática.
        <br>Si le pasamos "Hola mundo" nos retornaría "odnum aloH"</p>

    <form action="" method="POST">
        <b>Ingrese su palabra: </b><input type="text" name="palabra" class="form-control" required><br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <?php
        $palabra = str_split($_POST['palabra']);
        print_r($palabra);
        echo "<br>";
        print_r(array_reverse($palabra));
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
