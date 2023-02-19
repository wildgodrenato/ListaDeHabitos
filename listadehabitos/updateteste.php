<?
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "gestor";


                //criar uma conexão ao banco de dados


                    //criar uma conexão ao banco de dados
                    $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);
                    if ($conexao->connect_error){
                        die("falha na comexão: ".$conexao->connect_error);

                    }else {
                        echo"conexão bem sucedida!";
                    }
                    //$sql = "SELECT * FROM empresa WHERE codigo=$id";
                   // $result = $conexao->query($sql);

    
//require('rest.php');

$id=$_GET['codigo'];
$sqlSelect="SELECT * FROM empresa  WHERE codigo=$id";
$result = $conexao->query($sqlSelect);
if (!empty($_GET['codigo'])) {
    # code...
    
    



if ($result->num_rows>0) {
    while($user_data=mysqli_fetch_assoc($result) ){
    
    $cnpj=$user_data['cnpj'];
    $bloqueado=$user_data['bloqueado'];
    $fantasia=$user_data['fantasia'];
    $endereco=$user_data['endereco'];
    $cidade=$user_data['cidade'];
    $uf=$user_data['uf'];
    $cep=$user_data['cep'];
    $data=$user_data['data'];

    $nterminais=$user_data['nterminais'];
    $bairro=$user_data['bairro'];
    $email=$user_data['email'];
    $fone=$user_data['fone'];
    $razao=$user_data['razao'];
    $validade_licenca=$user_data['validade_licenca'];
    }
    
    
}else {
   //header('location: principal.php');
}

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styleupdate.css">
    <title>Atualizar | Dados da empresa</title>
</head>
<?

?>
<body>
    
    <div class="box">
        <form action="update.php" method="GET">
            <fieldset>
                <legend><b>Dados da empresa</b></legend>
                <br>
                
                <div class="inputBox">
                    <input type="number" name="codigo" id="codigo" class="inputUser" required>
                    <label for="codigo" class="labelInput">Código</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="CNPJ" id="CNPJ" class="inputUser" required>
                    <label for="CNPJ" class="labelInput">CNPJ | CPF</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="razao" id="razao" class="inputUser" required>
                    <label for="razao" class="labelInput">Razão social</label>
                </div><br>

                <div class="inputBox">
                    <input type="text" name="fantasia" id="fantasia" class="inputUser" required>
                    <label for="fantasia" class="labelInput">Nome fantasia</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="UF" id="uf" class="inputUser" required>
                    <label for="uf" class="labelInput">UF</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="CEP" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="fone" id="fone" class="inputUser" required>
                    <label for="fone" class="labelInput">Telefone</label>
                </div>


               
                
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend><b>Licença</b></legend>

                <input type="checkbox" id="bloqueio" name="bloqueio" value="bloqueio" required><label for="bloqueio">Bloquear sistema</label>
                <br>
                <br>
                <div>
                    <label for="terminais"> Número de Terminais</label>
                    <input type="text" name="terminais" id="terminais" class="inputUser" required>
                    
                </div >
                <br>
                <div >
                    <label for="validade"> Válidade licença</label>
                    <input type="date" name="validade" id="validade"  required>
                    
                </div>


            </fieldset>
            <br>
            <div >
                <label for="dataCad"> Data de cadastro</label>
                <input type="date" name="dataCad" id="dataCad"  required>
                

            </div>
            <br>
            <button id="gravar">Gravar</button>
            <button id="voltar">voltar</button>
            <button id="cancelar">Cancelar</button>
            
            
           
        </form>
    </div>

</body>

</html>