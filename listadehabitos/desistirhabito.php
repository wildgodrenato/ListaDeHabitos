<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>desistir habito</title>
</head>
<body>
<?
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito";
// Cria a conexão
$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
// Verifica se conectou com sucesso
if ($conn->connect_error) {
    die("A conexão falhou: " . $conn->connect_error);
    
}
//obtém o id do registro que foi recebido via get
$id = $_GET["id"];
$sql = "DELETE FROM habito WHERE id=".$id;
if (!($conn->query($sql) === TRUE)) {
    die("Erro ao excluir: " . $conn->error);
   }
// Fecha a conexão
$conn->close();
//redirecionar
header("location: index.php");
   
?>
</body>
</html>