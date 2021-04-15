<?php

class Etudiant {
    private $id_etudiant;
    private $nom;
    private $prenom;
    private $ville;
    private $sexe;
    private $filiere;
    private $classe;
    private $email;

    function __construct($id, $nom,  $prenom, $email, $ville, $sexe, $filiere, $classe) {
        $this->id_etudiant = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email=$email;
        $this->ville = $ville;
        $this->sexe = $sexe;
        $this->filiere = $filiere;
        $this->classe = $classe;
    }

    function getEmail() {
        return $this->email;
    }
    function getFiliere() {
        return $this->filiere;
    }
    function getClasse() {
        return $this->classe;
    }
    function getId() {
        return $this->id_etudiant;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getVille() {
        return $this->ville;
    }

    function getSexe() {
        return $this->sexe;
    }

    function setId($id_etudiant) {
        $this->id_etudiant = $id_etudiant;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function setFiliere($filiere) {
        $this->filiere = $filiere;
    }
    function setClasse($classe) {
        $this->classe = $classe;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }

}