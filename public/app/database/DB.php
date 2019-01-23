<?php

class DB  {

	public $init = false ;

	public function __construct()
	{
		$this->init();
	}

	protected function init ()
	{
		// Verify files dabanse
		if ( !file_exists($file_path = APP.'config/database.php') )
		{
			exit('The configuration file database.php does not exist.');
		}


		include($file_path);

		if ( !isset($db[$active_group])){
			exit('You have specified an invalid database connection group ('.$active_group.') in your config/database.php file.');
		}

		$params = $db[$active_group];

		// No DB specified yet? Beat them senseless...
		if (empty($params['dbdriver']))
		{
			exit('You have not selected a database type to connect to.');
		}


		// No DB specified yet? Beat them senseless...
		if (empty($params['dbdriver']))
		{
			exit('You have not selected a database type to connect to.');
		}
		//Load the DB driver class
		require_once(APP.'database/DB_driver.php');

		// Load the DB driver PDO
		$driver_file = APP.'database/'.$params['dbdriver'].'_driver.php';

		file_exists($driver_file) OR die('Invalid DB driver');
		require_once($driver_file);

		// Instantiate the DB adapter
		$driver = $params['dbdriver'].'_driver';
		$DB = new $driver($params);

	}

}

