<?php

	// P�gina inicial do projeto
	
	// Cria as constantes
	define('DIR',dirname(__FILE__));	// Pega o diret�rio local no servidor
	define('CONF','\config.php'); 		// Pega o nome do arquivo de configura��es

	// Verifica se o arquivo de configura��o site/config.php existe no servidor
	if(!file_exists(DIR . CONF)) {
		echo '<center><h1>O arquivo de configura��o n�o foi encontrado.</h1></center>';
		exit;
	}

	// inclui os arquivos na p�gina do site
	include(DIR . CONF);			// Inclui o arquivo de configura��es
	
	// inicia o utilit�rio de sess�es
	session_start();
?>

<!doctype html>
<html lang="<?php echo $var['lang']; ?>">
	
	<!-- Cabe�alho do site -->
	<head>
	
		<!-- Meta tags -->
		<meta charset="<?php echo $var['codificacao']; ?>">
		<meta name="author" content="Jos� Amarildo">
		
		<!-- T�tulo do site -->
		<title><?php echo $var['site']; ?></title>
		
		<!-- Folha de estilos -->
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		
		<!-- Scripts -->
		<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
		
	</head>
	
	<body>
		<?php 
			// Verifica se existe usu�rio logado
			if(isset($_SESSION['usuario'])) {
				// Verifica se est� em uma p�gina espec�fica
				if(isset($_GET['pagina'])){
					// Chama a p�gina solicitada
					include( DIR . '/paginas/' . $_GET['pagina'] . '.php');
				}else{
					// Chama a p�gina inicial 
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