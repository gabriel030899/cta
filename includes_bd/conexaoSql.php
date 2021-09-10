<?php

define('DB_HOST' , "troubleshooting.database.windows.net");
define('DB_USER' , "digitaltrouble");
define('DB_PASSWORD' , "Batata@020501");
define('DB_NAME' , "ctadigital");
define('DB_DRIVER' , "sqlsrv");

class Conexao
	
{
	
	private Static $connection;
	
	private function _construct() {}
	
	public static function getConnection() {
		
		
		
		$pdoConfig = DB_DRIVER . ":" . "Server=" . DB_HOST . ";";
		$pdoConfig .= "Database =" . DB_NAME . ";";
		
		try {
			
			if(!isset($connection)) {
				$connection = new PDO($pdoConfig, DB_USER, DB_PASSWORD);
				$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			}

			return $connection;
			
			
		} catch (PDOException $e) {
			
			$mensagem = "Drivers disponiveis:" . implode(",", PDO::getAvailableDrivers());
			$mensagem .= "/nErro " . $e->getMessage();
			var_dump($mensagem);
			throw new Exception($mensagem);
			
		}
		
		
		
		
	}
	
}


?> 