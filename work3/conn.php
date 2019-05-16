<?php
 class DBC{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect(){
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "posts";
      $this->charset = "utf8";
      try {
          $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset, $this->username, $this->password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conn;
          }
      catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage();
          }
    }

  }
?>