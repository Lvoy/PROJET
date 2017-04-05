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
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cours(10)</h1>
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
                                        <input id="cou_dateDebut" name="cou_dateDebut" placeholder="12.05.2017" class="form-control input-md"  type="date" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_partie">Nombre de partie du cours</label>
                                    <div class="col-md-5">
                                        <input id="cou_partie" name="cou_partie" placeholder="2" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_participantsMax">Nombre d'élèves maximum</label>
                                    <div class="col-md-5">
                                        <input id="cou_participantsMax" name="cou_participantsMax" placeholder="20" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_horaire">Horaire de début</label>
                                    <div class="col-md-5">
                                        <input id="cou_horaire" name="cou_horaire" placeholder="13:10" class="form-control input-md"  type="time" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_duree">Durée du cours en heures</label>
                                    <div class="col-md-5">
                                        <input id="cou_duree" name="cou_duree" placeholder="4" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_prixConcerne">Prix pour les personnes concerné</label>
                                    <div class="col-md-5">
                                        <input id="cou_prixConcerne" name="cou_prixConcerne" placeholder="500" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_prixAutre">Prix pour les autres</label>
                                    <div class="col-md-5">
                                        <input id="cou_prixAutre" name="cou_prixAutre" placeholder="700" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_presenceRemplie">Présence remplie</label>
                                    <div class="col-md-5">
                                        <input id="cou_presenceRemplie" name="cou_presenceRemplie" type="checkbox" value="ok" > ok
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_attestationTransmise">Attestation Transmise</label>
                                    <div class="col-md-5">
                                        <input id="cou_attestationTransmise" name="cou_attestationTransmise" placeholder="500"  type="checkbox" value="ok"> ok
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_remarque">Remarque</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="cou_remarque" name="cou_remarque" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_fraisRepasHebergement">Prix pour les repas et hébergement</label>
                                    <div class="col-md-5">
                                        <input id="cou_fraisRepasHebergement" name="cou_fraisRepasHebergement" placeholder="150" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_lieu">Lieu de formation</label>
                                    <div class="col-md-4">
                                        <select name="id_lieu" id="id_lieu" class="form-control input-md">
                                            <option>ETML</option>
                                            <option>Eracom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_formation">Type de formation</label>
                                    <div class="col-md-4">
                                        <select name="id_formation" id="id_formation" class="form-control input-md">
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
