<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br>
    <center><h3>Codigo Morse</h3></center>
    <hr>
    <p>Crea un programa que sea capaz de transformar texto natural a código
        <br>morse y viceversa.
        <br>Debe detectar automáticamente de qué tipo se trata y realizar
        <br>la conversión.
        <br>En morse se soporta raya "—", punto ".", un espacio " " entre letras
        <br>o símbolos y dos espacios entre palabras "  ".
        <br>El alfabeto morse soportado será el mostrado en
        <br>https://es.wikipedia.org/wiki/Código_morse.</p>

    <form action="" method="POST">
        <b>Ingrese la palabra: </b><input type="text" name="Palabra" class="form-control" required><br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <?php
        $abecedario = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $codigoMorse = ['.-', '-...', '-.-.', '-..', '.', '..-.', '--.', '....', '..', '.---', '-.-', '.-..', '--', '-.', '--.--', '---', '.--.', '--.-', '.-.', '...', '-', '..-', '...-', '.--', '-..-', '-.--', '--..', '.----', '..---', '...--', '....-', '.....', '-....', '--...', '---..', '----.', '-----'];
        $palabra = strtolower($_POST['Palabra']);
        $palabraArreglo = str_split($palabra);

        for ($i=0; $i < count($palabraArreglo); $i++) { 
            for ($j=0; $j < count($abecedario); $j++) { 
                if ($palabraArreglo[$i] == $abecedario[$j]) {
                    echo $codigoMorse[$j]. " , ";
                }
            }
        }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
