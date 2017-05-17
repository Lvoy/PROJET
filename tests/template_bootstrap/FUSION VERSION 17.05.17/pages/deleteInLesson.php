<?php
/**
 * Created by PhpStorm.
 * User: rodriguedy
 * Date: 17.05.2017
 * Time: 14:49
 */
include_once 'database.php';
$database = new database();
$database->deleteInLesson($_GET['el'],$_GET['co']);