<?php 

class Alunno { 

    protected $name = "";
    protected $surname = "";
    protected $eta = 0;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function getEta(){
        return $this->eta;
    }

    public function setEta($eta){
        $this->eta = $eta;
    }






}


?>