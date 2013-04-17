===============CONFIGURAÇÃO===============

Colocar todos os arquivos e pastas no diretorio www do apache e acessar o "localhost".

Para um autenticador de rede tem que direcionar o cliente para a página de login deste projeto, e modificar o código "pagina/index.php" para fazer um "reload" no browser, caso o usuário se autentique.



==================ESTRUTURA=======================

Pasta Projeto-
	  |-- index.php
	  |-- config.php
	  |- CSS
		|-- lauout.css	
	  |- imagens
		|-- ceu.jpg
		|-- gradiente.png
		|-- gradiente2.png
	  |- js 
		|-- jquery.maskedinput-1.3.min.js
		|-- jquery-1.5.2.min.js
	  |- paginas
		|-- cadastro.php
		|-- index.php
		|-- login.php
		|-- sair.php
	  |- SQL
		|-- usuarios.sql

+_____________+
|	      |   	
| - diretório |
| -- arquivo  |
+_____________+



===================FUNCIONALIDADE==============================

O projeto se baseia em uma estrutura de cadastro e login para usuários de uma rede wireless.

1.Index.php
	- Ao abrir a página inicial index.php é feito uma verificação se há um usuário logado. Se houver, a página que irá aparecer será a "paginas/index.php" se não, a página "paginas/login.php".



=====================INTEGRANTES======================

José Amarildo de Lima Filho - 20102380273 - 5º período.

Victor Igor de Lima Andrade - 20111380345 - 4º período

Wanderson Tássio Ramos da Silva - 20102380427 - 5º Período