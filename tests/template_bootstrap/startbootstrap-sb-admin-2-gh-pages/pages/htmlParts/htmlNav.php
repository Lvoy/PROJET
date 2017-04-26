<?php
/**
 * Created by PhpStorm.
 * User: dulexsa
 * Date: 05.04.2017
 * Time: 14:22
 */
?>
<?php
    include 'databaseDylan.php';
    $database = new database();
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard.php">Gestion formation cours</a>
    </div>
    <!-- /.navbar-header -->


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="lesson.php"><i class="fa fa-bar-chart-o fa-fw"></i> Les cours<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php
                            foreach($database->getAllLessonsName() as $lesson){
                                echo '<li>';
                                foreach($lesson as $key=>$value){
                                    if($key == 'id_cours'){
                                        echo '<a href="showLessonInformations.php?id='.$value.'">'.$value.'</a>';
                                    }
                                }
                                echo '</li>';
                            }
                        ?>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

