<?php
/**
 * Created by PhpStorm.
 * User: dulexsa
 * Date: 26.04.2017
 * Time: 14:26
 */
include 'database.php';
$type = $_GET['type'];
$objDatabase = new database();
$objDatabase->connectToDatabase();

switch ($type){
    case 'addStudent':
        $objDatabase->insertStudent($_POST['lastname'],$_POST['firstname'],$_POST['avs'],$_POST['phoneNbr'],$_POST['street'],$_POST['postalCode'],$_POST['locality'],$_POST['email'],$_POST['status']);
        break;
    case 'addFormer':
        $objDatabase->insertFormer($_POST['lastname'],$_POST['firstname'],$_POST['avs'],$_POST['skill'],$_POST['phoneNbr'],$_POST['email'],$_POST['street'],$_POST['postalCode'],$_POST['locality']);
        break;
    case 'addLesson':
        $objDatabase->insertNewLesson($_POST['cou_dateDebut'],$_POST['cou_partie'],$_POST['cou_participantsMax'],$_POST['cou_horaire'],$_POST['cou_duree'],$_POST['cou_prixConcerne'],$_POST['cou_prixAutre'],$_POST['cou_presenceRemplie'],$_POST['cou_attestationTransmise'],$_POST['cou_remarque'],$_POST['cou_fraisRepasHebergement'],$_POST['id_lieu'],$_POST['id_formation']);
        break;
}