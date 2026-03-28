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

<h1>Resultado</h1>

Média: <?php echo number_format($media, 2); ?><br>
Conceito: <?php echo $conceito; ?>

<meta charset="UTF-8">