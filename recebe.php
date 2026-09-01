<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe</title>
</head>
<body>
    
<?php

include ("conecao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirSenha = $_POST['confirmSenha'];

$sql = "INSERT INTO cadastro(nome, email, senha, confirmSenha) values ('$nome', '$email', '$senha', '$confirmSenha')";

$resultado = mysli_query($conexao, $sql);


?>



</body>
</html>