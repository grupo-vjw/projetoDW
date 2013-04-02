<?php 

$usuario_digitado = $_POST['usuario'];
$localhost = "127.0.0.1";
$usuario = "root";
$senha = "vertrigo";
$BD = "login";

mysql_connect($localhost, $usuario, $senha); //Conecta ao servidor mysql
mysql_select_db($BD); //Acessa a tabela da variável $
$mostra1 = mysql_query("INSERT INTO `usuarios`(`nome`, `usuario`, `senha`) VALUES ('" . $_POST['nome'] . "', '" . $_POST['usuario'] . "', '" . $_POST['senha'] . "')"); //mysql_query faz uma requisição ao BD igual o que fica no phpMyAdmin

if($mostra1) { Echo 'cadastrado com sucesso';}else{echo 'não cadastrado';}
mysql_close();


?>
