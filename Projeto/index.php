<?php

	// Página inicial do projeto
	
	// Cria as constantes
	define('DIR',dirname(__FILE__));	// Pega o diretório local no servidor
	define('CONF','\config.php'); 		// Pega o nome do arquivo de configurações

	// Verifica se o arquivo de configuração site/config.php existe no servidor
	if(!file_exists(DIR . CONF)) {
		echo '<center><h1>O arquivo de configuração não foi encontrado.</h1></center>';
		exit;
	}

	// inclui os arquivos na página do site
	include(DIR . CONF);			// Inclui o arquivo de configurações
	
	// inicia o utilitário de sessões
	session_start();
?>

<!doctype html>
<html lang="<?php echo $var['lang']; ?>">
	
	<!-- Cabeçalho do site -->
	<head>
	
		<!-- Meta tags -->
		<meta charset="<?php echo $var['codificacao']; ?>">
		<meta name="author" content="José Amarildo">
		
		<!-- Título do site -->
		<title><?php echo $var['site']; ?></title>
		
		<!-- Folha de estilos -->
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		
		<!-- Scripts -->
		<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
		
	</head>
	
	<body>
		<?php 
			// Verifica se existe usuário logado
			if(isset($_SESSION['usuario'])) {
				// Verifica se está em uma página específica
				if(isset($_GET['pagina'])){
					// Chama a página solicitada
					include( DIR . '/paginas/' . $_GET['pagina'] . '.php');
				}else{
					// Chama a página inicial 
					include( DIR . '/paginas/index.php');
				}
			}else{
				if(isset($_GET['pagina'])){
					if($_GET['pagina'] == "cadastro") {
						include(DIR . '/paginas/cadastro.php');
					}else{
						include(DIR . '/paginas/login.php');
					}
				}else{
					include(DIR . '/paginas/login.php');
				}
			}
		?>
	</body>
</html>