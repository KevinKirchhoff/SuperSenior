<?php

class Dao{
      private $host = "localhost";
      private $db = "Fox";
      private $user = "kevin";
      private $pass = "fatty";
    
    
    public function getConnection () {
        
        try {
          $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
        } catch (Exception $e) {
          echo "issue with the connections";
           exit;
        }
        return $conn;
    }
    
    public function saveName($name){
        echo "im in save name";
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (name) values (:name) ";
        $q=$conn->prepare($saveQuery);  
        $q->bindParam(":name", $name);
        $q->execute();
    }
    
    
    public function getRequest() {
        $conn = $this->getConnection();
         return $conn->query("select name,idClass from classes");
    }
}


?>