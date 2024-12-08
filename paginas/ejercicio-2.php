<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
          <br>
          <center><h3>Es una anagrama</h3></center>
          <hr>
          <p>Escribe una función que reciba dos palabras (String) y retorne 
           <br>verdadero o falso (Bool) según sean o no anagramas.
           <br>Un Anagrama consiste en formar una palabra reordenando TODAS
           <br>las letras de otra palabra inicial.
           <br>NO hace falta comprobar que ambas palabras existan.
           <br>Dos palabras exactamente iguales no son anagrama.</p>

           <form action="" method="POST">
                <b>Ingrese la primera palabra: </b><input type="text" name="nombre1" id="">
                <br>
                <b>Ingrese la segunda palabra: </b><input type="text" name="nombre2" id="">
                <br>
                <button type="submit" class="btn btn-success">Success</button>
           </form>

           <?php
                function esAnagrama($palabra1, $palabra2){

                    $nombre1 = str_split($palabra1);
                    $nombre2 = str_split($palabra2);

                    sort($nombre1);
                    sort($nombre2);
                    
                    return $nombre1 == $nombre2;
                }

                $variable1 = $_POST['nombre1'];
                $variable2 = $_POST['nombre2'];

                if (!empty($variable1) && !empty($variable2)) {
                    if ($variable1 !== $variable2 && esAnagrama($variable1, $variable2)) {
                        echo "Son anagramas <br>";
                        echo "Palabra 1 => ". $variable1 . " <br>";
                        echo "Palabra 2 => ". $variable2 . " <br>";
                    }
                    else {
                        echo "No son anagramas";
                    }
                }
                else {
                    echo "llene los campos";
                }

           ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>