<?php
    class ClientParticulier extends Client{

        public function addparticulier($nom,$prenom,$email, $adresse, $ville, $cp, $permis, $attestation_travail){
            $sqlQuery = " INSERT INTO " . $this->db_table . " (nom, prenom, email, adresse,ville, code_postale, permis_de_conduire, attestation_travail) "
            ."values ('".$nom."' , '".$prenom."' , '".$email."' , '".$adresse."', '".$ville."', '".$cp."' , '".$permis."', '".$attestation_travail."')";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $this->conn->lastInsertId();

        }
       
    }
?>