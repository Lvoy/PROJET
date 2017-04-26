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
}