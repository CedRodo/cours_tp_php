<?php

require_once 'SimpleOrm.class.php';

class Actors extends SimpleOrm {
    public $id;
    public $nom;
    public $prenom;
    public $mdp;
    public $mail;
    public $age;
}

?>