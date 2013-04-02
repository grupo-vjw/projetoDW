<?php 

$usuario_digitado = $_POST['usuario'];
$localhost = "127.0.0.1";
$usuario = "root";
$senha = "vertrigo";
$BD = "login";

mysql_connect($localhost, $usuario, $senha); //Conecta ao servidor mysql
mysql_select_db($BD); //Acessa a tabela da variável $
$mostra1 = mysql_query("SELECT * FROM `usuarios` WHERE nome = '" . $usuario_digitado . "'"); //mysql_query faz uma requisição ao BD igual o que fica no phpMyAdmin



$coluna = mysql_fetch_assoc($mostra1); //transforma a variavel $coluna num array
if($usuario_digitado == $coluna['nome'])
{
echo 'O usuário existe e a senha é: ' . $coluna['senha'];
}else{
echo 'O usuário inexiste';
}
