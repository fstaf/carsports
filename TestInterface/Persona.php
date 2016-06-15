<?php

/**
 * Description of Persona
 *
 * @author usuario1
 */

require_once 'Saluda.php';
class Persona {
    private $nom;
    public function __construct(Saluda $a) {
        $this->nom = "Sergi";
        $a->saluda();
    }
}
