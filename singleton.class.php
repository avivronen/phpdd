<?php 
	/**
	* Simple Singleton example
	* Singleton is nice for db's, libraries ech..
	* @author Aviv Ronen
	*/
	class Database {
		public static $instance;
		
		private function __construct() {
			/* Private */
		}
		
		public static function createInstance() {
			if(!isset(Database::$instance))
				Database::$instance = new Database();
			
			return Database::$instance;
		}
	}
	
	
	//usage examples:
	$db = Database::createInstance();
	
	
?>

