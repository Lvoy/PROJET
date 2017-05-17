<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        include_once 'htmlParts/htmlHeader.php';
    ?>
</head>

<body onLoad="pageScrollDown()">
<?php
include_once 'htmlParts/htmlNav.php';
?>
    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="float: left">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="requestDatabase.php?type=addLesson" method="post" enctype="multipart/form-data">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Ajouter un cours</legend>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_dateDebut">Date de début du cours</label>
                                    <div class="col-md-5">
                                        <input id="cou_dateDebut" name="cou_dateDebut" placeholder="12.05.2017" class="form-control input-md"  type="date" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="test" class="col-md-4 control-label" for="cou_partie">Nombre de partie du cours</label>
                                    <div class="col-md-5">
                                        <input id="cou_partie" name="cou_partie" placeholder="2" class="form-control input-md"  type="number" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="cou_participantsMax">Nombre d'élèves maximum</label>
                                    <div class="col-md-5">
                                        <input class="test" id="cou_participantsMax" name="cou_participantsMax" placeholder="20" class="form-control input-md"  type="number" value="">
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
                                            <?php
                                            $schools = $bdd->getSchools();

                                            foreach($schools as $data)
                                                foreach($data as $d)
                                                    echo '<option>'.$d.'</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="id_formation">Type de formation</label>
                                    <div class="col-md-4">
                                        <select name="id_formation" id="id_formation" class="form-control input-md">
                                            <?php
                                            $formations = $bdd->getFormations();

                                            foreach($formations as $data)
                                                foreach($data as $d)
                                                    echo '<option>'.$d.'</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-10">
                                        <input type="submit" value="Ajouter" id="addNewTeacher" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->

                </div>
                <!-- /.row -->
                <div class="row" style="float: left;margin-left: 15%">
                    <h2>Liste des cours</h2>
                    <div class="col-lg-12">
                        <ul>
                            <?php
                            $listCourses = $bdd->getIdLessons();
                            foreach($listCourses as $data)
                                foreach($data as $d)
                                    echo '<a href="showLessonInformations.php?id="'.$d.'>Cours '.$d.'</a><br>';
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
