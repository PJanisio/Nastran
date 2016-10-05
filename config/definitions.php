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
 
 
//Constant definitions files
 
define('VERSION', '0.0.1');
define('BUILD_STATUS', 'concept');

/*
build statuses:
- concept
- development
- alpha
- beta (if neccesary)
- release
*/

//Redefined variables and functions

$mtime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]; //execution time in seconds
$date = date('d-m-y'); 
$date_time = date('d-m-y H:m:s');

 
?> 