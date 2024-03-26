<?php 

/*
Sessões dados persistidos por determinado periodo de tempo até o que o navegador seja fechado. Sessões são uteis para persistir dados que podem ser utilizado entre diferentes paginas da aplicação, a variavel de sessão é criada ao logar

session_start(); - Inicializa e carrega os dados da $_SESSION
session_unset(); - Remove todos os dados da variavel de sessão, mas mantém sessão ativa, mesmo que sem dados, limpa as variaveis de sessão, sem encerrar a sessão


session_destroy(); - Destroi os dados da $_SESSION, e encerra a sessão
Cookies são dados do usuário que são persistidos mesmo após fechar o navegador


Cookies - São dados que são persistidos mesmo após fechar o navegador por determinado periodo de tempo. Cookies são uteis para persistir dados por periodos mais longos que sessões, e ter esses dados disponiveis em varias paginas


setCookie(name, value, timeout, "/") - Declara um cookie na pagina por determinado periodo de tempo.

"/" - Indica que os dados do cookie estarão disponiveis em todas paginas da aplicação.


$_COOKIE - Armazena dados de cookie
$_SESSION - Armazena dados de sessão

*/

