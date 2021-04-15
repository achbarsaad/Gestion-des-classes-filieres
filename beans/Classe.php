<?php


class Classe {
    private $id;
    private $code;
    private $id_filiere;
    
    function __construct($id, $code, $id_filiere) {
        $this->id = $id;
        $this->code = $code;
        $this->id_filiere = $id_filiere;
    }
    
    function getId() {
        return $this->id;
    }

    function getCode() {
        return $this->code;
    }

    function getIdFiliere() {
        return $this->id_filiere;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setIdFiliere($id_filiere) {
        $this->id_filiere = $id_filiere;
    }



}
