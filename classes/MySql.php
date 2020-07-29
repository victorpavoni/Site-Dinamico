<?php 

	class MySql {
		private static $pdo;
		public static function conectar() {
			if(self::$pdo == null) {
				if(isset(self::$pdo)) {
					return self::$pdo;
				} else {
					try{
						self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					} catch (Exception $e) {
						die('<h2 style="text-align:center;">OCORREU UM ERRO AO CONECTAR!</h2>');
					}
				}
			}
			return self::$pdo; //deixar fora do if
		}

	}

?>