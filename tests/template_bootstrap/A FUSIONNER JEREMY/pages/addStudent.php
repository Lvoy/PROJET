<?php
/**
 * Created by PhpStorm.
 * User: rodriguedy
 * Date: 05.04.2017
 * Time: 14:44
 * Description: Page qui permet d'ajouter un élève
 */
?>
<head>
    <?php
    include "htmlParts/htmlHeader.php";
    ?>
</head>
<body onLoad="pageScrollDown()">
<?php
include "htmlParts/htmlNav.php";



////////////////////////////////////////////////NOUVEAU
include_once 'database.php';
$bdd = new database();
////////////////////////////////////////////////NOUVEAU



?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Formulaire d'ajout d'élève</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ajouter un élève
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="requestDatabase.php?type=addStudent" method="post">
                                <div class="form-group">
                                    <label for="lastname">Nom</label>
                                    <input id="lastname" type="text" class="form-control" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input id="firstname" type="text" class="form-control" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="avs">Numéro AVS</label>
                                    <input id="avs" type="number" class="form-control" name="avs">
                                </div>
                                <div class="form-group">
                                    <label for="phoneNbr">Numéro de téléphone</label>
                                    <input id="phoneNbr" type="number" class="form-control" name="phoneNbr">
                                </div>
                                <div class="form-group">
                                    <label for="street">Rue</label>
                                    <input id="street" type="text" class="form-control" name="street">
                                </div>
                                <div class="form-group">
                                    <label for="postalCode">Code postal</label>
                                    <input id="postalCode" type="number" class="form-control" name="postalCode">
                                </div>
                                <div class="form-group">
                                    <label for="locality">Localité</label>
                                    <input id="locality" type="text" class="form-control" name="locality">
                                </div>
                                <div class="form-group">
                                    <label for="status">Statut</label>
                                    <select id="status" class="form-control" name="status">



                                        <!--////////////////////////////////////////////////////////////////NOUVEAU-->
                                        <?php
                                        $status = $bdd->getStudentStatus();

                                        foreach($status as $data)
                                            echo '<option value="'.$data['id_status'].'">'.$data['sta_nom'].'</option>';
                                        ?>
                                        <!--////////////////////////////////////////////////////////////////NOUVEAU-->



                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Envoyer</button>
                                <button type="reset" class="btn btn-default">Supprimer</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!-- /#page-wrapper -->
</body>
