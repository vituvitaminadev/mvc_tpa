<?php
require_once "inc/config.php";
require_once "controller/JogosController.php";
require_once "model/Jogos.php";

$app = new JogosController();
$app->all();