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

<h1>Resultado</h1>

IMC: <?php echo number_format($imc, 2); ?><br>
Situação: <?php echo $situacao; ?>

<meta charset="UTF-8">