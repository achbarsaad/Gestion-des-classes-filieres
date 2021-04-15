<?php
class Classe {
    private $id;
    private $code;
    private $filiere;
    public function __construct($id, $code, $filiere) {
        $this->id = $id;
        $this->code = $code;
        $this->filiere = $filiere;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function setFiliere($filiere): void {
        $this->filiere = $filiere;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setCode($code): void {
        $this->code = $code;
    }


}
