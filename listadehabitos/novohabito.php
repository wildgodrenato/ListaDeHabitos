<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de hábits</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="center">
    <h1>Novo hábito</h1>
    <!-- Formulário para cadastro de pessoas 
    Note a utilização do atributo name, que faz
    o link entre os elementos do DOM e o JavaScript-->
        <form id="formulario" action="inserthabito.php">

            <p><label>Nome: <input type="text" id="nome" name="nome" autofocus></label></p>
            <p><input type="submit" value="Criar"></p>

        </form>
    </div>
    <script type="text/Javascript">
        /*Declara uma função para
        validar o Formulário
        */
        var validaForm = function() {
            var nomeHabito = document.getElementById("nome").value;
                if (""== nomeHabito) {
                    alert("É necessário informar o nome do Hábito!")
                        return false/
                    
                }
            
        }
        //aqui declaramos que esta função ocorre
        //sempre no submit do Formulário
        document.getElementByID("formulario").onsubmit.validaForm;
    </script>

</body>
</html>