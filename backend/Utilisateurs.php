<?php

require_once 'SimpleOrm.class.php';

class Utilisateurs extends SimpleOrm {
    public $id;
    public $nom;
    public $prenom;
    public $motdepasse;
    public $email;
    public $age;
}

?>