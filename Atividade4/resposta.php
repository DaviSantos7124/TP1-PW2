<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$media = ($n1 + $n2 + $n3) / 3;

if ($media < 5) {
    $conceito = "I";
} elseif ($media < 7) {
    $conceito = "R";
} elseif ($media < 9) {
    $conceito = "B";
} else {
    $conceito = "MB";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

Média: <?php echo $media; ?><br>
Conceito: <?php echo $conceito; ?>

</body>
</html>