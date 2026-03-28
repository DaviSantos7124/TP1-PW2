<?php
$reais = $_POST['reais'];

$dolar = $reais / 5.00;
$euro = $reais / 5.40;
$libra = $reais / 6.30;
?>

<h1>Resultado</h1>

Dólar: <?php echo number_format($dolar, 2); ?><br>
Euro: <?php echo number_format($euro, 2); ?><br>
Libra: <?php echo number_format($libra, 2); ?>


<meta charset="UTF-8">