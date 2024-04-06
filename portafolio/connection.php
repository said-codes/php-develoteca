<?php

class Connection{
    private $server= "localhost:3307";
    private $user="root";
    private $password="";
    private $connection;

    public function __construct(){
        try{
            $this->connection=new PDO("mysql:host=$this->server;dbname=album",$this->user,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error de conexion".$e->getMessage();
        }
    }

    // to insert, update and delete
    public function executeQuery($sql){
         $this->connection->exec($sql);
         return $this->connection->lastInsertId();
    }
    // to select
    public function executeSelect($sql){
        $sentence=$this->connection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}



?>
