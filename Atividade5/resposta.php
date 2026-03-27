<?php
$salario = $_POST['salario'];

if ($salario <= 2824) {
    $liquido = $salario - ($salario * 0.08);
} else {
    $liquido = $salario - ($salario * 0.10);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

Salário líquido: <?php echo $liquido; ?>

</body>
</html>