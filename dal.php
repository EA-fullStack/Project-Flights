<?php
// Data access layer
class DataAccessLayer {

	private $host = '127.0.0.1';
	private $db   = 'northwind';
	private $user = 'root';
	private $pass = '1212';
	private $charset = 'utf8';
    private $dsn;
    private $opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    function __construct() {
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
    }

    function select($query) {
        $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        $stmt = $pdo->query($query);

        return $stmt;
    }

    function insert($query) {
        $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        $stmt = $pdo->query($query);
    }

    function fkJoin($query){

        $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        $stmt = $pdo->query($query);
        

        return $stmt;
        
    }
    


}
// SELECT 
//     pilot.id, pilot.name, flight.pilot_id
// FROM 
//     pilot
// INNER JOIN 
//     flight 
// ON
//     pilot.id=flight.pilot_id
//     WHERE pilot.id =flight.pilot_id; 

?>
