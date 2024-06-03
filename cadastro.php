<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    

<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['e-mail'];
    $senha = $_POST['senha'];

    $sql =  "INSERT INTO tbl_dados(nome, cpf, telefone, e-mail, senha) VALUES('$nome','$cpf','$telefone','$email','$senha')";
    if(mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso!";

    } else {
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);

?>
    <a href="/login.html">Login</a>
</body>
</html>