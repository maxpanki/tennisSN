<?php


session_start();
date_default_timezone_set('Europe/Kiev');


require_once('libs/config.php');

  /* REDIRECT_SCRIPT_URL*/
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'ODB/ODB.php';

$app = new Bootstrap();

?>
