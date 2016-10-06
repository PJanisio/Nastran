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


//Define debug state

switch (DEBUG_PHP) {
    case 0:
        error_reporting(0);
        break;
    case 1:
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        break;
    case 2:
        error_reporting(E_ALL);
        break;
}

//Redefined variables and functions

$mtime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]; //execution time in seconds
$date = date('d-m-y'); 
$date_time = date('d-m-y H:m:s');

 
?> 