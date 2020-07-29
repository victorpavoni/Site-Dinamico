<?php 
	
	session_start();
	define('INCLUDE_PATH', 'http://localhost/php/ProjetosPraticos/projeto_landing-page/');
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

	// NOME EMPRESA
	define('NOME_EMPRESA', 'Minha Empresa');

	$autoload = function($class){
		if($class == 'Email')
			require_once "classes/phpmailer/PHPMailerAutoLoad.php";
		include "classes/$class.php";
	};
	spl_autoload_register($autoload);

	//CONEXAO BANCO DE DADOS
	define('HOST', 'localhost');
	define('DB', 'site_dinamico');
	define('USER', 'root');
	define('PASSWORD', '');

	// FUNCS
	function pegaCargo($cargo) {
		$arr = [
			'0' => 'Funcionario',
			'1' => 'Configurador',
			'2' => 'Administrador'
		];
		return $arr[$cargo];
	}
	
?>