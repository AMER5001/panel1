<?php

/**
 * Database Class
 */

class DB
{
  private $db_host = "localhost";
  private $db_port = 3306;
  private $db_user = "root";
  private $db_pass = "ixrefezx501";
  private $db_name = "ArabKings";
  private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
  protected $conn;

  public function openConnection(){

    $this->conn = null;

    try{
    $this->conn = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass, $this->options);
	
    } catch(PDOException $e) {
    echo "error while connection: " . $e->getMessage();
    die();
    }
	
    return $this->conn;
	
  }
  public function closeConnection() {
    $this->conn = null;
  }
}

$database = new DB();

?>