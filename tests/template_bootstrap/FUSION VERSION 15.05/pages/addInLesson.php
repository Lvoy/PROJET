<?php
/**
 * Created by PhpStorm.
 * User: schaeferje
 * Date: 15.05.2017
 * Time: 14:56
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div data-role="page">
            <div data-role="main" class="ui-content">
                <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
                    <form method="post" action="requestDatabase.php?type=addInLesson&amp;idEleve=<?php echo $_GET['idEleve'];?>&amp;idCours=<?php echo $_GET['idCours'];?>">
                        <div>
                            <h3>Informations complémentaires : </h3>
                            <label for="dateBill" class="ui-hidden-accessible">Date d'envoi de la facture :</label>
                            <input type="date" name="dateBill" id="dateBill" placeholder="Date d'envoi"><br>
                            <label for="datePaiement" class="ui-hidden-accessible">Date de paiement :</label>
                            <input type="date" name="datePaiement" id="datePaiement" placeholder="Date de paiement"><br>
                            <label for="travelPrice">Keep me logged in</label>
                            <input type="number" name="travelPrice" id="travelPrice" placeholder="Prix"><br>
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
