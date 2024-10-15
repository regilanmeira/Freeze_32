<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencias.php"?>
</head>
<body>
<!-- INCLUSÃO DO TOPO DA PÁGINA -->    
<?php include "header_admin.php" ?>

<?php 
//1º PASSO: INCLUSÃO DAS FUNÇÕES DE ACESSO A DADOS
include "conexao_bd.php";

//2º PASSO: CAPTURAR O LOGIN E SENHA DIGITADO PELO USUÁRIO
$login_usuario = $_POST["txtLoginUsuario"];
$senha_usuario = $_POST["txtSenhaUsuario"];

$hash = password_hash($senha_usuario,1);

//3º PASSO: COMANDO SQL
$sql = "INSERT INTO usuario(login_usuario,senha_usuario) ";
$sql .= " VALUES('$login_usuario','$hash') ";

//4º PASSO: Executar no BDA
if (executarComando($sql))
{
    echo "<h1>Usuário adicionado!</h1>";
}
else
{
    echo "<h1>Usuário não cadastrado</h1>";
}




?>




<!-- INCLUSÃO DO RODAPE -->
<?php include "footer_admin.php" ?>
</body>
</html>