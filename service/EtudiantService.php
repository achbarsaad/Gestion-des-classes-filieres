<?php


include_once RACINE . '/classes/Etudiant.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class EtudiantService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO etudiant (`id`, `nom`, `prenom`, `ville`, `sexe`,`email`, `id_filiere`, `id_classe`) "
                . "VALUES (NULL, '" . $o->getNom() . "', '" . $o->getPrenom() . "', '" . $o->getVille() . "', "
                . "'" . $o->getSexe() . "','". $o->getEmail() . "',  ". 1 . " , ". 1 
                . " );";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur en create SQL');
    }

    public function delete($o) {
        $query = "delete from etudiant where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur en delete SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        $count = 1;
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Etudiant($e->id,  $e->nom, $e->prenom, $e->email, $e->ville, $e->sexe, $count, $count);
            $count++;
        }
        return $etds;
    }

    public function findById($id) {
        $query = "select * from etudiant where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Etudiant($e->id, $e->prenom, $e->nom,$e->email, $e->ville, $e->sexe, 1, 1);
        }
        return $etd;
    }

    public function update($o) {
        $query = "UPDATE `etudiant` SET `nom` = '" . $o->getNom() . "', `prenom` = '" .
                $o->getPrenom() . "', `ville` = '" . $o->getVille() . "', `sexe` = '" .
                $o->getSexe() . "' WHERE `etudiant`.`id` = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur en update SQL');
    }

    public function getAll() {
        $query = "select * from etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}