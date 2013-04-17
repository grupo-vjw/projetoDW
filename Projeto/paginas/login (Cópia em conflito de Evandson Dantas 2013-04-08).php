<?php

	// Verifica se foi enviado dados via post para essa página, se sim tenta valida-los.
	if(isset($_POST['usuario'])){
	
		// Cria variáveis temporárias
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
	
		// Conecta ao banco de dados
		$v1 = mysql_connect($db['host'],$db['user'],$db['pass']);
		$v2 = mysql_select_db($db['banco']);
		
		// Cria a consulta ao banco de dados
		$sql = "SELECT * FROM `usuarios` WHERE cpf = '" . $usuario . "' OR usuario = '" . $usuario . "'";
		
		// Realiza a consulta
		$consulta = mysql_query($sql);
		
		// Fecha o Banco de dados
		mysql_close();
		
		// Verifica se a consulta foi válida
		if(!$consulta){
			$erro = "Impossível realizar a consulta ao banco de dados";
		}else{
		
			// Converte o resultado da consulta para a coluna
			$coluna = mysql_fetch_assoc($consulta);
		
			// Ele conseguiu realizar a consulta, agora procura verificar se o usuário e senha estão corretos.
			if (strtolower($coluna['nome']) != strtolower($usuario)) {
				$erro = "Usuário inválido";
			}else{
				if (strtolower($coluna['senha']) != strtolower($senha)) {
					$erro = "Senha inválida";
				}else{
					$_SESSION['usuario'] = $coluna['nome'];		// Seta o usuário
					header('Location: .');						// Atualiza a página
				}
				
			}
			
		}
		
	}else{
		// Desativa a mensagem de erro
		unset($erro);
	}

?>

<div id="pagina">

	<h1> Página de Login </h1><hr>
	<form method='post' action='.'>

	<?php // Verifica se existe alguma mensagem de erro para imprimir
		if(isset($erro))echo '<div id="msg">' . $erro . '</div>';
	?>

		<table>
			<tr><td><label>Usuário ou cpf:</label></td><td><input type='text' name='usuario'></td></tr>
			<tr><td><label>Senha:</label></td><td><input type='password' name='senha'></td></tr>
			<tr><td></td><td><input type=submit value="Entrar"></td></tr>
		</table>

	</form>
	
</div>

	<!-- Coloca o link para a página de cadastro -->
	<div style="margin-top: 40px;display:block; border: 1px dotted gray; background: #FFF; border-radius: 0px; width: 420px;">Caso queira realizar o cadastro, 
		<a style="color:#DD0000; text-decoration:none;" href="?pagina=cadastro">clique aqui</a>.
	</div>