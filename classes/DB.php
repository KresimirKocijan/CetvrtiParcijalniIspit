<?php
namespace DB;
use Config\Config;
use PDO;
use PDOException;

class DB
{
  private static $instance = null;
  private $config;
  private $conn;
  private $query;
  private $error = false;
  private $results;
  private $count_row = 0;
  
  /* Construct*/
  private function __construct()
  {
    $this->config = Config::get('database');
    
    $driver = $this->config['driver'];
    $host = $this->config[$driver]['host'];
    $db = $this->config[$driver]['db'];
    $charset = $this->config[$driver]['charset'];
    
    $dsn = $driver.':host='.$host.';dbname='.$db.';charset='.$charset;
    $user = $this->config[$driver]['user'];
    $pass = $this->config[$driver]['pass'];
    
    try{
      $this->conn = new PDO($dsn, $user, $pass);
    } catch (PDOException $e){
      die($e->getMessage());
    }
  }
  
  /* Clone */
  private function __clone(){}
  
  /* getInstance */
  public static function getInstance()
  {
    if(!self::$instance){
      self::$instance = new self(); 
    }
    
    return self::$instance;
  }
  
  /*####### GETERS #######*/
  
  /* conn */
  public function conn()
  {
    return $this->conn;
  }
  
  /* error */
  public function error()
  {
    return $this->error;
  }
  
  /* countRow */
  public function countRow()
  {
    return $this->count_row;
  }
  
  /* results */
  public function results()
  {
    return $this->results;
  }
}





