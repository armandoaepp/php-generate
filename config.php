<?php
class config{
public $servidor_="127.0.0.1";
public $usuario_="root";
public $pass_="root";
public $basededatos_="db_admin_prod";

}

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'db_admin_prod',
	'dbdriver' => 'mysql',
	'dbprefix' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
);


$db['db'] = $db['default'] ;