<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro enviado</title>
</head>
<body>
    <?php 
    ///criando a conexão com o db
    $conexao= mysqli_connect('localhost', 'root','', 'db_cadastro_usuarios');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['e-mail'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO tbl_dados_clientes(nome, cpf, telefone, e-mail, senha) values('$nome', '$cpf', '$telefone', '$email', '$senha')";

    try{
    mysqli_query($conexao, $sql);
    echo "<p style= 'color:blue' >Cliente  cadastrado com sucesso!!.</p>";
    
    }catch(mysqli_sql_exception $msn){
        if($msn->getCode() === 1062){ 
        echo "<p style= 'color:red' >O E-mail informado já está cadastrado.</p>";
        }
    }

    
    ?>

<hr>
    <a href="cad_cliente.html">Tela Inicial</a>

</body>
</html>