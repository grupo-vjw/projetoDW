<?php

	// Verifica se foi enviado dados via post para essa página, se sim tenta valida-los.
	if(isset($_POST['usuario'])){
	
		// Cria variáveis temporárias
		$nome = $_POST['usuario'];
		$sexo = $_POST['sexo'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$cpf = $_POST['cpf'];
		$cep = $_POST['cep'];
		$dnascimento = $_POST['dnascimento'];
		$dpagamento = $_POST['dpagamento'];
		$logradouro = $_POST['logradouro'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$complemento = $_POST['complemento'];
	
		// Conecta ao banco de dados
		mysql_connect($db['host'],$db['user'],$db['pass']);
		mysql_select_db($db['banco']);
		
		// Cria a consulta ao banco de dados
		$sql = "INSERT INTO `usuarios`(`nome`, `sexo`, `cpf`, `dnascimento`, `dpagamento`, `logradouro`, `numero`, `bairro`, `complemento`, `cep`, `usuario`, `senha`) VALUES ('" .$nome . "','" . $sexo . "','" . $cpf . "','" . $dnascimento . "',". $dpagamento .",'". $logradouro . "'," . $numero . ",'". $bairro . "','" . $complemento . "','" . $cep ."','" . $usuario . "','" . $senha . "')";
		
		// Realiza a consulta
		$consulta = mysql_query($sql);
		
		// Fecha o Banco de dados
		mysql_close();

		if(!$consulta){
			echo 'Usuário cadastrado com sucesso, <a href=".">clique aqui</a> para voltar.';
		}else{
			echo 'Um erro aconteceu ao tentar realziar o cadastro. Tente novamente <a href="?pagina=cadastro">clicando aqui</a>';
			echo mysql_error();
		}
		
		exit;
	}
	
?>
<br><br><br>
<div id="pagina">

	<h1> Página de cadastro </h1><hr>
	<form method='post' action='?pagina=cadastro'>

	<?php // Verifica se existe alguma mensagem de erro para imprimir
		if(isset($erro))echo '<div id="msg">' . $erro . '</div>';
	?>

	<script language=javascript>
	function findCEP() {
	if($.trim($("#cep").val()) != ""){
	    $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
	        if(resultadoCEP["resultado"] == 1){
                $("#logradouro").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                $("#bairro").val(unescape(resultadoCEP["bairro"]));
                // $("#city").val(unescape(resultadoCEP["cidade"]));
                // $("#state").val(unescape(resultadoCEP["uf"]));
                $("#numero").focus();
            }else{
                alert("Endereço não encontrado para o cep ");
            }
        });
    }
}
	</script>
	
		<table>
			<tr><td><label>Nome Completo:</label></td><td><input type='text' name='nome'></td></tr>			
			<tr><td><label>Sexo:</label></td><td><input type='text' name='sexo'></td></tr>			
			<tr><td><label>Usuário:</label></td><td><input type='text' name='usuario'></td></tr>
			<tr><td><label>Senha:</label></td><td><input type='password' name='senha'></td></tr>
			<tr><td><label>Data de nascimento:</label></td><td><input type="date" id="nascimento" name="dnascimento"></td></tr>
			<tr><td><label>Dia de Pagamento:</label></td><td><input type="number" min="1" max="31" id="pagamento" name="dpagamento"></td></tr>
			<tr><td><label>CPF:</label></td><td><input type='text' name='cpf'></td></tr>
			<tr><td><label>CEP:</label></td><td><input type='text' id="cep" name='cep' onchange="findCEP();"></td></tr>
			<tr><td><label>Logradouro:</label></td><td><input type='text' id="logradouro" name='logradouro'></td></tr>
			<tr><td><label>Bairro:</label></td><td><input type='text' id="bairro" name='bairro'></td></tr>
			<tr><td><label>Numero:</label></td><td><input type="number" id="numero" min="1" max="999" name="numero"></td></tr>
			<tr><td><label>Complemento:</label></td><td><input type='password' name='complemento'></td></tr>
			<tr><td></td><td><input type=submit value="Cadastrar"></td></tr>
		</table>

	</form>
</div>