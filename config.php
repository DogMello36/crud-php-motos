<?php

/** O nome do banco de dados*/
// define('DB_NAME', 'wda_crud');
const DB_NAME = "if0_42990595_wda_crud";   

define('DB_USER', 'if0_42990595');

define('DB_PASSWORD', 'zTkl0SEGuCMZF6');

define('DB_HOST', 'sql102.infinityfree.com');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/'); // não pode const aqui dentro
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/'); //raiz do projeto. trocar para "/" quando hospedado
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define("DBAPI", ABSPATH . 'inc/database.php');

const HEADER_TEMPLATE = ABSPATH . "inc/header.php";
const FOOTER_TEMPLATE = ABSPATH . "inc/footer.php";
