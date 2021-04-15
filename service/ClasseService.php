<?php
include_once RACINE . '/classes/Classe.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class ClasseService implements IDao{
    private $connexion;
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        
        $query = "INSERT INTO classe (`id`, `code`, `id_filiere`) "
                . "VALUES (NULL, '" . $o->getCode() . "',1);";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur creation SQL');
    }
    public function delete($o) {
        $query = "delete from classe where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur en delete SQL');
    }
    public function findAll() {
        $etds = array();
        $query = "select * from classe";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Classe($e->id, $e->code, $e->id_filiere);
        }
        return $etds;
    }

    public function findById($id) {
        $query = "select * from classe where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Classe($e->id, $e->code, $e->id_filiere);
        }
        return $etd;
    }

    public function update($o) {
        $query = "UPDATE `classe` SET `code` = '" . $o->getCode() . "', `id_filiere` = '" .
                $o->getFiliere()."';";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function getAll() {
        $query = "select * from classe";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function count() {
        $query = "select count(*) as nbr,code from Classe group by code";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

}
