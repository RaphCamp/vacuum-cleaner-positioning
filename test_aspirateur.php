<?php
require "Position.php";




//On définit les paramètres d'entrée de notre aspirateur (dimension de la grille en x et y , position initiale en x et y, orientation initiale)
$aspirateur1 = new Position(10,10,5,5,'N'); 


//On appelle la méthode "bouger" en rentrant le paramètre de mouvement (A -> avancer ; D -> tourner à droite ; G -> tourner à gauche)
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('G');

//On appelle la méthode "voirPosition" pour vérifier la nouvelle position de l'aspirateur
$aspirateur1->voirPosition();

?>