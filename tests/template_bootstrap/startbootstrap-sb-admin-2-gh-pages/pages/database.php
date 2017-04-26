<?php

/**
 * Created by PhpStorm.
 * User: dulexsa
 * Date: 26.04.2017
 * Time: 14:28
 */
class database
{
    private $servername = "localhost";
    private $username = "dbLoginUser";
    private $password = ".Etml-";
    private $dbname = "db_nickname";
    private $conn;

    function connectToDatabase(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            return $this->conn;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function insertStudent($nom,$prenom,$avs,$telephone,$rue,$cp,$localite,$email,$status){
        $query = "INSERT INTO db_formation.t_eleve (id_eleve, ele_nom, ele_prenom, ele_avs, ele_telephone, ele_rue, ele_cp, ele_localite, ele_email, id_status) VALUES (NULL, '".$nom."', '".$prenom."', '?', '?', '?', '?', '?', '?', '?')";
    }

    function insertFormer(){

    }
}