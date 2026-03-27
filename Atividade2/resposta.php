<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$email = $nome . "." . $sobrenome . "@cps.sp.gov.br";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

Email: <?php echo $email; ?>

</body>
</html>