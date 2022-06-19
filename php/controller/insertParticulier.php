<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../database.php';
    include_once '../services/Client.php';
    include_once '../services/ClientParticulier.php';
    
    $database = new Database();
    $db = $database->getConnection();
    $items = new ClientParticulier($db);
    $nomclientrequested = $_GET['nom'];
    $prenrequested = $_GET['pren'];
    $emailrequested = $_GET['email'];
    $adresserequested = $_GET['adresse'];
    $villerequested = $_GET['ville'];
    $cprequested = $_GET['cp'];
    $permisrequested = $_GET['permis'];
    $attestation_travail = $_GET['attestation_travail'];
    

    $stmt = $items->addparticulier($nomclientrequested,  $prenrequested, $emailrequested, $adresserequested, $villerequested, $cprequested, $permisrequested,  $attestation_travail );
    

    echo $stmt;
    
    
?>