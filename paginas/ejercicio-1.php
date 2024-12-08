<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
          <br>
          <center><h3>FizzBuzz</h3></center>
          <hr>
          <p>Escribe un programa que muestre por consola (con un print) los
            <br>números de 1 a 100 (ambos incluidos y con un salto de línea entre
            <br>cada impresión), sustituyendo los siguientes: 
            <br>Múltiplos de 3 por la palabra "fizz".
            <br>Múltiplos de 5 por la palabra "buzz".
            <br>Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".</p>

            <?php
                for ($i=1; $i <=100; $i++) {

                    if ($i % 3 == 0 && $i % 5 ==0) {
                        echo "fizzbuzz => " .$i. "<br>";
                    }
                    else if ($i % 3 == 0) {
                        echo "fizz =>" .$i. "<br>";
                    }
                    else if ($i % 5 == 0) {
                        echo "buzz =>" .$i. "<br>";
                    }

                }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>