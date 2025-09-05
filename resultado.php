<?php

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

// Média do aluno
$media = ($nota1 + $nota2) / 2;

//Status do aluno depois do lançamento
if ($media >= 7) {
    $status = "Aprovado";
} elseif ($media >= 4) {
    $status = "Prova Final";
} else {
    $status = "Reprovado";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Matrícula:</strong> <?php echo $matricula; ?></p>
    <p><strong>Média:</strong> <?php echo number_format($media, 2); ?></p>
    <p><strong>Status:</strong> <?php echo $status; ?></p>

    <br>
    <a href="formulario.html">Voltar ao formulário</a>
</body>
</html>
