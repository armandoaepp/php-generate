<?php

$data = require_once "config.php" ;

class ConnectionManager {

  protected  $db_host = 'localhost';
  protected  $db_user = 'root';
  protected  $db_pass = '';
  protected $db_name      = 'escuelac_w_ne16';
  protected $db_port      = '3306';
  protected $db_driver    = 'mysql';

  protected $query     = '';
  protected $rows      = array();
  protected $conn      = null  ;
  protected $status_exe = false ;


	/**
	 * Data Source Name / Connect string
	 *
	 * @var	string
	 */
	public $dsn;

	/**
	 * Username
	 *
	 * @var	string
	 */
	public $username;

	/**
	 * Password
	 *
	 * @var	string
	 */
	public $password;

	/**
	 * Hostname
	 *
	 * @var	string
	 */
	public $hostname;

	/**
	 * Database name
	 *
	 * @var	string
	 */
	public $database;

	/**
	 * Database driver
	 *
	 * @var	string
	 */
	public $dbdriver		= 'pdo';


	/**
	 * Table prefix
	 *
	 * @var	string
	 */
	public $dbprefix		= '';

	/**
	 * Character set
	 *
	 * @var	string
	 */
	public $char_set		= 'utf8';

	/**
	 * Collation
	 *
	 * @var	string
	 */
  public $dbcollat		= 'utf8_general_ci';


	/**
	 * Class constructor
	 *
	 * @param	array	$params
	 * @return	void
	 */
	public function __construct($params)
	{
		if (is_array($params))
		{
			foreach ($params as $key => $val)
			{
				$this->$key = $val;
			}
		}

		// log_message('info', 'Database Driver Class Initialized');
	}





}