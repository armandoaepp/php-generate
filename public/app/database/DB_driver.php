<?php

/**
 * Database Driver Class
 *
 * This is the platform-independent base DB implementation class.
 * This class will not be called directly. Rather, the adapter
 * class for the specific database will extend and instantiate it.
 */
abstract class DB_driver
{

    /**
     * Data Source Name / Connect string
     *
     * @var    string
     */
    public $dsn;

    /**
     * Username
     *
     * @var    string
     */
    public $username;

    /**
     * Password
     *
     * @var    string
     */
    public $password;

    /**
     * Hostname
     *
     * @var    string
     */
    public $hostname;

    /**
     * Database name
     *
     * @var    string
     */
    public $database;

    /**
     * Database driver
     *
     * @var    string
     */
    public $dbdriver = 'mysqli';

    /**
     * Sub-driver
     *
     * @used-by    CI_DB_pdo_driver
     * @var    string
     */
    public $subdriver;

    /**
     * Table prefix
     *
     * @var    string
     */
    public $dbprefix = '';

    /**
     * Character set
     *
     * @var    string
     */
    public $char_set = 'utf8';

    /**
     * Collation
     *
     * @var    string
     */
    public $dbcollat = 'utf8_general_ci';

    /**
     * Encryption flag/data
     *
     * @var    mixed
     */
    public $encrypt = false;

    /**
     * Swap Prefix
     *
     * @var    string
     */
    public $swap_pre = '';

    /**
     * Database port
     *
     * @var    int
     */
    public $port = null;

    /**
     * Persistent connection flag
     *
     * @var    bool
     */
    public $pconnect = false;

    /**
     * Connection ID
     *
     * @var    object|resource
     */
    public $conn_id = false;

    /**
     * Result ID
     *
     * @var    object|resource
     */
    public $result_id = false;

    /**
     * Debug flag
     *
     * Whether to display error messages.
     *
     * @var    bool
     */
    public $db_debug = false;

    /**
     * Benchmark time
     *
     * @var    int
     */
    public $benchmark = 0;

    /**
     * Executed queries count
     *
     * @var    int
     */
    public $query_count = 0;

    /**
     * Bind marker
     *
     * Character used to identify values in a prepared statement.
     *
     * @var    string
     */
    public $bind_marker = '?';

    /**
     * Save queries flag
     *
     * Whether to keep an in-memory history of queries for debugging purposes.
     *
     * @var    bool
     */
    public $save_queries = true;

    /**
     * Queries list
     *
     * @see    CI_DB_driver::$save_queries
     * @var    string[]
     */
    public $queries = array();

    // --------------------------------------------------------------------

    /**
     * Class constructor
     *
     * @param    array    $params
     * @return    void
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                $this->$key = $val;
            }
        }

    }

}
