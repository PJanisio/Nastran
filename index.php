<?php
 
/*
NASTRAN 
2016+
Pawel Janisio
MIT License
 */

//this instruction is valid only for frontend scripts
define('NASTRAN_FRONTEND', 1);
define( 'ROOT_PATH', './');


require_once( ROOT_PATH.'classes/class_init.php');

new autoLoad();

echo 'Nastran: Hello Muthafucka!';

?>