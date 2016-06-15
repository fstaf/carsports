<?php
require_once 'saludoImpl.php';
require_once 'Persona.php';
$saludo = new saludoImpl();
$p1 = new Persona($saludo);