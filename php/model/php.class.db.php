<?php 

class Database {

    protected static $connection;


    /**
     * Connection 
     */
	
    public function connect() {    
        if(!isset(self::$connection)) {
            $config = parse_ini_file('../config/config.ini'); 
            self::$connection = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        }

        if(self::$connection === false) {
            return false;
        }
        return self::$connection;
    }

    /**
     * Query the database
     */
	 
    public function query($query) {
        // Connect to the database
        $connection = $this -> connect();

        // Query the database
        $result = $connection -> query($query);

        return $result;
    }

    /**
     * Fetch rows from the database (SELECT query)
     */
	 
    public function select($query) {
        $rows = array();
        $result = $this -> query($query);
        if($result === false) {
            return false;
        }
        while ($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    /**
     * Fetch the last error from the database
     */
	 
    public function error() {
        $connection = $this -> connect();
        return $connection -> error;
    }

    /**
     * Quote and escape value for use in a database query
     */
	 
    public function quote($value) {
        $connection = $this -> connect();
        return "'" . $connection -> real_escape_string($value) . "'";
    }
		
}

?>  

