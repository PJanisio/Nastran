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
	
	class autoLoad{
	
		function __construct() {
		require_once( ROOT_PATH.'config/definitions.php');
		require_once( ROOT_PATH.'config/config.php');
		
		}
	
	}
	
?>