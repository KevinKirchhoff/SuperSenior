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

        public function saveDropDown($dropdown){
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (class) values (:dropdown) ";
        $q=$conn->prepare($saveQuery);  
        $q->bindParam(":dropdown", $drop);
        $q->execute();
    }
        public function saveEmail($email){
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (contactinfo) values (:email) ";
        $q=$conn->prepare($saveQuery);  
        $q->bindParam(":email", $email);
        $q->execute();
    }
        public function saveAvailability($availability){
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (availability) values (:availability) ";
        $q=$conn->prepare($saveQuery);  
        $q->execute();
    }
        public function save($name, $email){
        try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
        $saveQuery = "insert into request (name,contactinfo,availability) values (:name,:email,:availability) ";
        $q=$conn->prepare($saveQuery);  
        $q->bindParam(":email", $email);
        $q->bindParam(":name", $name);
                $q->bindParam(":availability", $availability);

        $q->execute();
    }
    public function getRequest() {
        $conn = $this->getConnection();
         return $conn->query("select name,idClass from classes");
    }
}


?>