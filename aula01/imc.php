<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora IMC</title>
</head>
<body>
    <?php
        $peso = 55;
        $alt = 1.75;
        $imc = $peso / $alt**2;

        echo "Peso: $peso kg<br>";
        // echo gettype($peso)

        echo "Altura: $alt cm<br>";

        echo "IMC: ". number_format($imc,2)."<br>";

        if ($imc < 18.5) {
            echo "Classificação: Magreza";
        } else if ($imc < 24.9) {
            echo "Classificação: Normal";
        } else if ($imc < 29.9) {
            echo "Classificação: Sobrepeso";
        } else if ($imc < 39.9) {
            echo "Classificação: Obesidade";
        }

    ?>    


</body>
</html>