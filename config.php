<?php
class config{
public $servidor_="127.0.0.1";
public $usuario_="root";
public $pass_="";
public $basededatos_="db_admin_prod";

}

$db['default'] = array(
	'dsn'	     => '',
	'db_host' => 'localhost',
	'db_user' => 'root',
	'password' => '',
	'database' => 'db_admin_prod',
	'db_driver' => 'mysql',
	'dbport'   => '3306',
);


$db['db'] = $db['default'] ;
/*
return [
	// Más configuración arriba
	'Datasources' => [
			'default' => [
					'className' => 'Cake\Database\Connection',
					'driver' => 'Cake\Database\Driver\Mysql',
					'persistent' => false,
					'host' => 'localhost',
					'username' => 'cake_blog',
					'password' => 'AngelF00dC4k3~',
					'database' => 'cake_blog',
					'encoding' => 'utf8',
					'timezone' => 'UTC'
			],
	],
	// Más configuración abajo
]; */