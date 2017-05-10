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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="align-content: center">
                <div class="row" style="align-content: center">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="lesson.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ajouter un cours</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Nombres de cours</div>
                                    <div class="huge">12</div>

                                </div>
                            </div>
                        </div>
                        <a href="lesson.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
                <div class="row" style="align-content: center">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Nombre d'élèves</div>
                                        <div class="huge">26</div>
                                    </div>
                                </div>
                            </div>
                            <a href="addStudent.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ajouter un élève</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Nombre de formateur</div>
                                        <div class="huge">26</div>
                                    </div>
                                </div>
                            </div>
                            <a href="addFormer.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ajouter un formateur</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- /.row -->
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
