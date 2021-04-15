<?php
include_once '../racine.php';
include_once RACINE.'/service/ClasseService.php';
extract($_GET);

$es = new ClasseService();
$es->update(new Classe($id, $code, $filiere));

 header("location:../index2.php");
