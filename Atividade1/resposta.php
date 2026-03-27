<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $situacao = "Abaixo do peso";
} elseif ($imc < 25) {
    $situacao = "Peso normal";
} elseif ($imc < 30) {
    $situacao = "Sobrepeso";
} else {
    $situacao = "Obesidade";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

IMC: <?php echo $imc; ?><br>
Situação: <?php echo $situacao; ?>

</body>
</html>