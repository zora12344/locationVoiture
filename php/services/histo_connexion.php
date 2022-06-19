<?php

// require 'Logger.class.php';
 
// // Création d'un objet Logger
// $logger = new Logger('./logs/');
 
// // Enregistrement d'un événement dans le fichier test_advanced.log :
// $logger->log('erreurs', 'err_utilisateurs', "Fonction login() : l'authentification a échoué", Logger::GRAN_MONTH);

//get les infos de log


class histo_connextion{
    // Connection
    protected  $conn;
    // Table
    protected  $db_table = "histo_connextion";
  
    
    // Db connection
    public function __construct($db){
        $this->conn = $db;
    }
    public function gethisto(){
        $sqlQuery = "SELECT * FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    

    ?>