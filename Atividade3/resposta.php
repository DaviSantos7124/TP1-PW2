<?php
$reais = $_POST['reais'];

$dolar = $reais / 5;
$euro = $reais / 5.4;
$libra = $reais / 6.3;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

Dólar: <?php echo '$' . $dolar; ?><br>
Euro: <?php echo '€' . $euro; ?><br>
Libra: <?php echo '£' . $libra; ?>

</body>
</html>