<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Votre nom");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");

$princesse = new Personnage();
$sorcier = new Sorcier();

echo "Propriétés de la princesse : ";
echo $princesse->getNom() . ",";
echo $princesse->x . ",";
echo $princesse->y . ",";
echo $princesse->getVie() . "<br>";

echo "Propriétés du sorcier : ";
echo $sorcier->getNom() . ",";
echo $sorcier->x . ",";
echo $sorcier->y . ",";
echo $sorcier->getVie() . "<br>";

