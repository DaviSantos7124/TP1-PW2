<?php
$salario = $_POST['salario'];
$salarioMinimo = 1412;

if ($salario <= 2 * $salarioMinimo) {
    $liquido = $salario - ($salario * 0.08);
} else {
    $liquido = $salario - ($salario * 0.10);
}
?>

<h1>Resultado</h1>

Salário líquido: R$ <?php echo number_format($liquido, 2, ',', '.'); ?>

<meta charset="UTF-8">