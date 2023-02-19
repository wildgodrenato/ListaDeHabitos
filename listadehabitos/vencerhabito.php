<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Vencer Hábito</title>
</head>
<body>
    
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito";
//CRIANDO CONEXÃO
$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);

//verificando se conectou
if ($conn->connect_error){
    die("falha na conexão: " . $conn->connect_error);
}

//atualiza o status de A para ativo para V - vencido

$id = $_GET["id"];
$sql = "UPDATE habito SET status='V'  WHERE id=" . $id;// atualize a tabela habito mude para o  "V" onde o status estiver A "$id" 
// Verifica se o comando foi executado com sucesso
if (!($conn->query($sql)===TRUE)){
    $conn->close();
    die("Erro ao atualizar:  . $conn->error");
}
//fechar conexão
$conn->close();
//redirecionar para o index
header("Location: index.php");
?>














</body>
</html>