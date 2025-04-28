<?php
class Connection{
    protected $connection=null;
    private $host = "localhost:3308";
    private $user = "root";
    private $password = "";
    private $db = "actividad7";
    private $port = 3306;

    protected function connect(){
        try{
            $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db, $this->port);
        } catch (Exception $e){
            echo "Error: " . $e->getMessage();
            die("Connection failed");
        }
    }
}