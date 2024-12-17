<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <center><h3>Decimales a binarios</h3></center>
    <hr>
    <p>Crea un programa se encargue de transformar un número
        <br>decimal a binario sin utilizar funciones propias del lenguaje que lo hagan directamente.</p>

    <form action="" method="POST">
        <b>Ingrese el numero: </b><input type="text" name="numero" class="form-control" required><br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <?php
        $numero = $_POST['numero'];
        $pivote = 0;
        $resultado = [];
        do {
            $pivote = $numero % 2;
            $resultado[] = $pivote;
            $numero = $numero / 2;
        } while ($numero >= 1);

        echo implode('', array_reverse($resultado));
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
