<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>insert hábito</title>
</head>
<body>
<?
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito";
    // Abre a conexão com o bancode dados listadehabito
$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

    // Verifica se houve erro aoabrir a conexão
if ($conexao->connect_error) {
        die("A conexão falhou: " . $conexao->connect_error);
    }
// Busca nome que foi recebidovia get através do formulário de cadastro
$nome = $_GET["nome"];
// Insere o hábito na tabela habito do banco de dados
$sql = "INSERT INTO habito (nome, status) VALUES ('.$nome.','A')";

// Verifica se ocorreu tudo bem caso houve erro, fecha a conexão e aborta o programa
if (!($conexao->query($sql)=== true)){
    $conexao->close();
    die("Erro: " . $sql . "<br>" . $conexao->error);
}

// Fecha a conexão com o  banco de dados
$conexao->close();
// Envia para a página index onde aparece a lista de hábitoss já com o novo hábito cadastrado
header("Location: index.php");
?>
</body>
</html>