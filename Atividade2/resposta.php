<?php
$nome = strtolower($_POST['nome']);
$sobrenome = strtolower($_POST['sobrenome']);

$email = $nome . "." . $sobrenome . "@cps.sp.gov.br";
?>

<h1>Email Gerado</h1>

<?php echo $email; ?>

<meta charset="UTF-8">