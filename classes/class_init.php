<?php
 
/*
NASTRAN 
2016+
Pawel Janisio
MIT License
 */

//this sequence is added for the internal working script
if(!defined('NASTRAN_FRONTEND'))
	exit('Nastran: You are not allowed to see this file.');
	
	
	//load configs, classes and initialize mysql connection
	
	class autoLoad{
	
		function __construct() {
		
		require_once( ROOT_PATH.'config/config.php');
		require_once( ROOT_PATH.'config/definitions.php');
		
		}
		
		public function dbConnect()	{

		try
			{
		$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				exit();
			}
		}
		
		
		
	
	}
	
?>