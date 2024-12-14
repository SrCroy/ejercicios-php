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
          <center><h3>Area de un poligono</h3></center>
          <hr>
          <p>Crea una única función (importante que sólo sea una) que sea capaz
            <br>de calcular y retornar el área de un polígono.
            <br>La función recibirá por parámetro sólo UN polígono a la vez.
            <br>Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
            <br>Imprime el cálculo del área de un polígono de cada tipo.</p>

            <form action="" method="POST">
                <b>Ingrese el primer lado: </b><input type="number" name="lado1"><br>
                <b>Ingrese el segundo lado: </b><input type="number" name="lado2"><br>
                <button type="submit" class="btn btn-success">Success</button>
            </form>

            <?php
                $lado1 = $_POST['lado1']; 
                $lado2 = $_POST['lado2'];

                areaPoligono($lado1, $lado2);
                function areaPoligono($valor1, $valor2){
                    if ($valor1 == $valor2) {
                        $areaTriangulo = ($valor1 * $valor2)/2;
                        $areaCuadrado = $valor1*$valor2;
                        echo "Area de un traingulo con sus lados iguales es de: " . $areaTriangulo . "<br>";
                        echo "Area de un cuadrado es de: " . $areaCuadrado . "<br>";
                    }
                    else{
                        $areaRectangulo = $valor1 * $valor2;
                        echo "Area de un Rectangulo es de: " . $areaRectangulo . "<br>";
                    }

                
                }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>