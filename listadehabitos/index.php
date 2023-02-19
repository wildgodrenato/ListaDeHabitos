<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de hábitos<</title>

</head>
<body>
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "listadehabito";
    

                    //criar uma conexão ao banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);
    if ($conexao->connect_error){
        die("falha na comexão: ".$conexao->connect_error);
    }
    $sql = "SELECT id". ",nome"." FROM habito"." WHERE status = 'A'";
    $resultado = $conexao->query($sql);
?>
    <div class="center">
        <h1>Lista de hábitos</h1>
        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar a sua vida!</p>
    
			<?
							// Obtém a lista de hábitos do
							// banco de dados MySQL
			
							//verificar conexão
		   
							// Executa a query da variável $sql
			
			


					//verificar se a query retornou registros

			if ($resultado->num_rows > 0){


			?>
		<br>
			<table class="center">
				<tbody>
					<?
						//looping pelos registros retornados
						/*A função mysqli_fetch_assoc() é usada para retornar uma matriz associativa representando a 
						próxima linha no conjunto de resultados representado pelo parâmetro result , aonde cada chave
						representa o nome de uma coluna do conjunto de resultados.
						while->enquanto*/
						while($registro = $resultado->fetch_assoc())
						{

						
					?>
					<tr>
						<td><? echo $registro["nome"]; ?></td>
							<td><a href="vencerhabito.php?id=<? 
							echo $registro["id"]; ?>">Vencer</a>
							</td>
						<td><a href="desistirhabito.php?id=<? 
							echo $registro["id"]; ?>">Desistir</a>
						</td>
					</tr>
					<? } //fim looping do while?>
				</tbody>
			</table>
		<p>Continue mudando a sua vida!</p>
		<p>Cadastre mais hábitos!</p>
		<?
		} else{
		?>
		<p>Você não possui hábitos cadastrados!</p>
		<p>Começe já a mudar sua vida!</p>




		<?} //fim do if
		//fechar conexão mysql
		$conexao->close();
		?>
		<a href="novohabito.php">Cadastrar Hábito</a>               

    </div>
        
    </body>
</html>