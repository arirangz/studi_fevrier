<?php
require_once __DIR__."/Voiture.php";

var_dump(Voiture::UNITE_VITESSE);
Voiture::afficherUniteVitesse();

$voiture1 = new Voiture("rouge", 2010, 260);
var_dump($voiture1);

$voiture1->setCouleur("jaune");
var_dump($voiture1);

var_dump(Voiture::$compteur);

$voiture2 = new Voiture("rouge", 2020, 245);



var_dump($voiture2);
var_dump(Voiture::$compteur);