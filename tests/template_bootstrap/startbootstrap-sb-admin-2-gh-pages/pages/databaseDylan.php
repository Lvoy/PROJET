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
    private $username = "root";
    private $password = "";
    private $dbname = "db_formation";
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

    function getAllLessonsName(){
        $query = "SELECT id_cours FROM t_cours";
        try {
            $req = $this->connectToDatabase()->prepare($query);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req->execute();
        $table = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $table;
    }

    function getAllLessonInformation($idLesson){
        $query = "SELECT * FROM t_cours WHERE id_cours=$idLesson";
        try {
            $req = $this->connectToDatabase()->prepare($query);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req->execute();
        $table = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $table;
    }

    function getAllFormationLocationInformation(){
        $query = "SELECT * FROM t_lieuformation";
        try {
            $req = $this->connectToDatabase()->prepare($query);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req->execute();
        $table = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $table;
    }

    function getAllFormationInformation(){
        $query = "SELECT * FROM t_formation";
        try {
            $req = $this->connectToDatabase()->prepare($query);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $req->execute();
        $table = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $table;
    }
}