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
        $query = 'INSERT INTO t_eleve (id_eleve, ele_nom, ele_prenom, ele_avs, ele_telephone, ele_rue, ele_cp, ele_localite, ele_email, id_status) VALUES (NULL, "'.$nom.'", "'.$prenom.'", "'.$avs.'", '.$telephone.', "'.$rue.'", '.$cp.', "'.$localite.'", "'.$email.'", '.$status.')';
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
    }

    function insertFormer($nom,$prenom,$avs,$competence,$telephone,$email,$rue,$cp,$localite){
        $query = 'INSERT INTO `db_formation`.`t_formateur` (`id_formateur`, `for_nom`, `for_prenom`, `for_avs`, `for_competence`, `for_telephone`, `for_email`, `for_rue`, `for_cp`, `for_localite`) VALUES (NULL, "'.$nom.'", "'.$prenom.'", "'.$avs.'","'.$competence.'", '.$telephone.', "'.$email.'","'.$rue.'", '.$cp.', "'.$localite.'")';
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
    }





    ///////////////////////////////////////////////////////////////////////////NOUVEAU
    function insertNewLesson($dateDebut,$partie,$participantsMax,$horaire,$duree,$prixConcerne,$prixAutre,$presenceRemplie,$attestationTransmise,$remarque,$fraisRepasHebergement,$idlieu,$idFormation){
        $dateDebut = date("Y-m-d", strtotime($dateDebut));
        $query = 'INSERT INTO `t_cours`(`id_cours`, `cou_dateDebut`, `cou_partie`, `cou_participantsMax`, `cou_horaire`, `cou_duree`, `cou_prixConcerne`, `cou_prixAutre`, `cou_presenceRemplie`, `cou_attestationTransmise`, `cou_remarque`, `cou_fraisRepasHebergement`, `id_lieu`, `id_formation`) VALUES (NULL,"'.$dateDebut.'",'.$partie.','.$participantsMax.',"'.$horaire.'",'.$duree.',"'.$prixConcerne.'","'.$prixAutre.'","'.$presenceRemplie.'","'.$attestationTransmise.'","'.$remarque.'",'.$fraisRepasHebergement.',(SELECT id_lieu FROM t_lieuformation WHERE lie_etablissement="'.$idlieu.'"),(SELECT id_Formation FROM t_formation WHERE for_nom="'.$idFormation.'"))';
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
    }
    ///////////////////////////////////////////////////////////////////////////NOUVEAU






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




    ///////////////////////////////////////////////////////////////////////////////////////NOUVEAU
    function getNumberOfStudents(){
        $query = "SELECT COUNT(id_eleve) AS nb FROM t_eleve";
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

    function getNumberOfCourses(){
        $query = "SELECT COUNT(id_cours) AS nb FROM t_cours";
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

    function getNumberOfFormers(){
        $query = "SELECT COUNT(id_formateur) AS nb FROM t_formateur";
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

    function getSchools()
    {
        $query = "SELECT lie_etablissement AS etablissement FROM t_lieuformation";
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

    function getFormations()
    {
        $query = "SELECT for_nom AS formation FROM t_formation";
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

    function getStudentStatus()
    {
        $query = "SELECT id_status,sta_nom FROM t_status";
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

    function getIdLessons()
    {
        $query = "SELECT id_cours AS cours FROM t_cours";
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
    ///////////////////////////////////////////////////////////////////////////////////////NOUVEAU
}