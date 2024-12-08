<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
          <br>
          <center><h3>Es un numero primo</h3></center>
          <hr>
          <p>Escribe un programa que se encargue de comprobar si un número es o no primo.
            <br>Hecho esto, imprime los números primos entre 1 y 100.</p>

            <?php
                function esPrimo($respuesta){

                    if($respuesta < 2){
                        return false; //Esto no es numero primo
                    }

                    for ($i=2; $i <= sqrt($respuesta); $i++) { 
                        if ($respuesta % $i == 0) {
                            return false; //Que aca se puede dividir entre mas numero
                        }
                    }

                    return true; //Que si es un numero primo

                }

                for ($i=1; $i <= 100; $i++) { 
                    if (esPrimo($i)) {
                        echo "El numero => ". $i . " es primo <br>";
                    }
                }

                
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>