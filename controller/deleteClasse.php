<?php

include_once '../racine.php';
include_once RACINE.'/service/ClasseService.php';
extract($_GET);

$es = new ClasseService();
$es->delete($es->findById($id));
header("location:../index2.php");
