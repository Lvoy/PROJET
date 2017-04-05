<?php
/**
 * Created by PhpStorm.
 * User: rodriguedy
 * Date: 05.04.2017
 * Time: 14:44
 * Description: Page qui permet l'ajout d'un formateur
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
            <h1 class="page-header">Formulaire d'ajout d'un formateur</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ajouter un formateur
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form">
                                <div class="form-group">
                                    <label for="lastname">Nom</label>
                                    <input id="lastname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input id="firstname" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="avs">Numéro AVS</label>
                                    <input id="avs" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="skill">Compétence</label>
                                    <input id="skill" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phoneNbr">Numéro de téléphone</label>
                                    <input id="phoneNbr" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="street">Rue</label>
                                    <input id="street" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="postalCode">Code postal</label>
                                    <input id="postalCode" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="locality">Localité</label>
                                    <input id="locality" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
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
