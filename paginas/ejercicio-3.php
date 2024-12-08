<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
          <br>
          <center><h3>Sucesion de fubonacci</h3></center>
          <hr>
          <p>Escribe un programa que imprima los 50 primeros números de la sucesión
            <br>de Fibonacci empezando en 0.
            <br>La serie Fibonacci se compone por una sucesión de números en
            <br>la que el siguiente siempre es la suma de los dos anteriores.
            <br>0, 1, 1, 2, 3, 5, 8, 13...</p>

           <?php
                $arrays = [0,1];

                for ($i=2; $i < 50; $i++) {
                    $arrays[$i] = $arrays[$i - 1] + $arrays[$i - 2];
                }

                echo "<ul>";
                    foreach ($arrays as $numero) {
                        echo "<li>$numero</li>";
                    }
                echo "</ul>";
           ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>