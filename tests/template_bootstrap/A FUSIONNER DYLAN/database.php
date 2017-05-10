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


    ////////////////////////////NOUVEAU/////////////////////////////////////
    function updateLesson($lessonId,$dateDebut,$partie,$participantsMax,$horaire,$duree,$prixConcerne,$prixAutre,$presenceRemplie,$attestationTransmise,$remarque,$fraisRepasHebergement,$idlieu,$idFormation){

        $query = 'UPDATE t_cours SET cou_dateDebut=\''.$dateDebut.'\', cou_partie='.$partie.', cou_participantsMax='.$participantsMax.', cou_horaire=\''.$horaire.'\', cou_duree='.$duree.', cou_prixConcerne='.$prixConcerne.', cou_prixAutre='.$prixAutre.', cou_presenceRemplie='.$dateDebut.', cou_attestationTransmise=\''.$attestationTransmise.'\', cou_remarque=\''.$remarque.'\', cou_fraisRepasHebergement='.$fraisRepasHebergement.', id_lieu='.$idlieu.', id_formation='.$idFormation;
        print_r($query);
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
        header('Location:showLessonInformations.php?id='.$lessonId);
        Exit();

    }
    ////////////////////////////NOUVEAU/////////////////////////////////////

    function insertStudent($nom,$prenom,$avs,$telephone,$rue,$cp,$localite,$email,$status){
        $query = 'INSERT INTO t_eleve (id_eleve, ele_nom, ele_prenom, ele_avs, ele_telephone, ele_rue, ele_cp, ele_localite, ele_email, id_status) VALUES (NULL, "'.$nom.'", "'.$prenom.'", "'.$avs.'", '.$telephone.', "'.$rue.'", '.$cp.', "'.$localite.'", "'.$email.'", '.$status.')';
        print_r($query);
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
        print_r($query);
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
    }

    function insertNewLesson($dateDebut,$partie,$participantsMax,$horaire,$duree,$prixConcerne,$prixAutre,$presenceRemplie,$attestationTransmise,$remarque,$fraisRepasHebergement,$idlieu,$idFormation){
        $dateDebut = date("Y-m-d", strtotime($dateDebut));
        $query = 'INSERT INTO `t_cours`(`id_cours`, `cou_dateDebut`, `cou_partie`, `cou_participantsMax`, `cou_horaire`, `cou_duree`, `cou_prixConcerne`, `cou_prixAutre`, `cou_presenceRemplie`, `cou_attestationTransmise`, `cou_remarque`, `cou_fraisRepasHebergement`, `id_lieu`, `id_formation`) VALUES (NULL,"'.$dateDebut.'",'.$partie.','.$participantsMax.',"'.$horaire.'",'.$duree.',"'.$prixConcerne.'","'.$prixAutre.'","'.$presenceRemplie.'","'.$attestationTransmise.'","'.$remarque.'",'.$fraisRepasHebergement.',(SELECT id_Lieu FROM t_lieuformation WHERE lie_etablissement="'.$idlieu.'"),(SELECT id_Formation FROM t_formation WHERE for_nom="'.$idFormation.'"))';
        print_r($query);
        try {
            $request = $this->conn->prepare($query);
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $request->execute();
        $request->closeCursor();
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

    ////////////////////////////NOUVEAU/////////////////////////////////////
    function getAllStudentsInThisLesson($idLesson){

        $qwery = 'SELECT * FROM t_eleve WHERE t_inscriptioncours.id_eleve=t_eleve.id_eleve AND t_inscriptioncours.id_cours='.$idLesson;
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

    ////////////////////////////NOUVEAU/////////////////////////////////////
}