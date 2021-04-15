<?php
include_once '../racine.php';
include_once RACINE.'/service/ClasseService.php';
extract($_GET);
$id=1;
$es = new ClasseService();
$es->create(new Classe($id, $code, $filiere));
$id++;
 header("location:../index2.php");
