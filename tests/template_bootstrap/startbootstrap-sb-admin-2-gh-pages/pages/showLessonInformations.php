<?php
/**
 * Created by PhpStorm.
 * User: rodriguedy
 * Date: 05.04.2017
 * Time: 14:44
 * Description: Page qui affiche les différents cours
 */
?>
<head>
    <?php
        include "htmlParts/htmlHeader.php";
    ?>
</head>
<body>
    <?php
        include "htmlParts/htmlNav.php";
        foreach($database->getAllLessonInformation($_GET['id']) as $lesson){
            foreach($lesson as $key=>$value){
                if($key == 'id_cours'){
                    $id_cours = $value;
                }
                if($key == 'cou_dateDebut'){
                    $cou_dateDebut = $value;
                }
                if($key == 'cou_partie'){
                    $cou_partie = $value;
                }
                if($key == 'cou_participantsMax'){
                    $cou_participantsMax = $value;
                }
                if($key == 'cou_horaire'){
                    $cou_horaire = $value;
                }
                if($key == 'cou_duree'){
                    $cou_duree = $value;
                }
                if($key == 'cou_prixConcerne'){
                    $cou_prixConcerne = $value;
                }
                if($key == 'cou_prixAutre'){
                    $cou_prixAutre = $value;
                }
                if($key == 'cou_presenceRemplie'){
                    $cou_presenceRemplie = $value;
                }
                if($key == 'cou_attestationTransmise'){
                    $cou_attestationTransmise = $value;
                }
                if($key == 'cou_remarque'){
                    $cou_remarque = $value;
                }
                if($key == 'cou_fraisRepasHebergement'){
                    $cou_fraisRepasHebergement = $value;
                }
                if($key == 'id_lieu'){
                    $id_lieu = $value;
                }
                if($key == 'id_formation'){
                    $id_lieu = $value;
                }
            }
        }
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cours(<?php echo $id_cours;?>)</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        modifier un cours
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_dateDebut">Date de début du cours</label>
                                    <div class="col-md-5">
                                        <input id="cou_dateDebut" name="cou_dateDebut" placeholder="12.05.2017" class="form-control input-md"  type="date" value="<?php echo $cou_dateDebut;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_partie">Nombre de partie du cours</label>
                                    <div class="col-md-5">
                                        <input id="cou_partie" name="cou_partie" placeholder="2" class="form-control input-md"  type="number" value="<?php echo $cou_partie;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_participantsMax">Nombre d'élèves maximum</label>
                                    <div class="col-md-5">
                                        <input id="cou_participantsMax" name="cou_participantsMax" placeholder="20" class="form-control input-md"  type="number" value="<?php echo $cou_participantsMax;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_horaire">Horaire de début</label>
                                    <div class="col-md-5">
                                        <input id="cou_horaire" name="cou_horaire" placeholder="13:10" class="form-control input-md"  type="time" value="<?php echo $cou_horaire;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_duree">Durée du cours en heures</label>
                                    <div class="col-md-5">
                                        <input id="cou_duree" name="cou_duree" placeholder="4" class="form-control input-md"  type="number" value="<?php echo $cou_duree;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_prixConcerne">Prix pour les personnes concerné</label>
                                    <div class="col-md-5">
                                        <input id="cou_prixConcerne" name="cou_prixConcerne" placeholder="500" class="form-control input-md"  type="number" value="<?php echo $cou_prixConcerne;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_prixAutre">Prix pour les autres</label>
                                    <div class="col-md-5">
                                        <input id="cou_prixAutre" name="cou_prixAutre" placeholder="700" class="form-control input-md"  type="number" value="<?php echo $cou_prixAutre;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_presenceRemplie">Présence remplie</label>
                                    <div class="col-md-5">
                                        <input id="cou_presenceRemplie" name="cou_presenceRemplie" <?php if($cou_presenceRemplie != ""){echo 'checked';}?> type="checkbox" value="ok" > ok
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_attestationTransmise">Attestation Transmise</label>
                                    <div class="col-md-5">
                                        <input id="cou_attestationTransmise" name="cou_attestationTransmise" <?php if($cou_attestationTransmise != ""){echo 'checked';}?> placeholder="500"  type="checkbox" value="ok"> ok
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_remarque">Remarque</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="cou_remarque" name="cou_remarque"><?php echo $cou_remarque;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_fraisRepasHebergement">Prix pour les repas et hébergement</label>
                                    <div class="col-md-5">
                                        <input id="cou_fraisRepasHebergement" name="cou_fraisRepasHebergement" placeholder="150" class="form-control input-md"  type="number" value="<?php echo $cou_fraisRepasHebergement;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_lieu">Lieu de formation</label>
                                    <div class="col-md-4">
                                        <select name="id_lieu" id="id_lieu" class="form-control input-md">
                                            <?php foreach($lol as $lol)?>
                                            <option>ETML</option>
                                            <option>Eracom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_formation">Type de formation</label>
                                    <div class="col-md-4">
                                        <select name="id_formation" id="id_formation" class="form-control input-md">
                                            <?php foreach($lol as $lol)?>
                                            <option>Interne</option>
                                            <option>Externe</option>
                                            <option>Congrès</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-10">
                                        <input type="submit" value="Modifier" id="addNewTeacher" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des élèves du cours
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><button type="button" class="btn btn-danger">Enlever</button></td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td><button type="button" class="btn btn-danger">Enlever</button></td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><button type="button" class="btn btn-danger">Enlever</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ajouter un élève au cours
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><button type="button" class="btn btn-success">Ajouter</button></td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td><button type="button" class="btn btn-success">Ajouter</button></td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><button type="button" class="btn btn-success">Ajouter</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    <!-- /#page-wrapper -->
</body>
