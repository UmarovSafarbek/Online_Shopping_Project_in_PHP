<?php
session_start();

error_reporting(-1);
include 'config.php';
include 'core/App.php';
include 'core/Messege.php';
include 'core/Controller.php';
include 'core/Model.php';

new APP();
?>
