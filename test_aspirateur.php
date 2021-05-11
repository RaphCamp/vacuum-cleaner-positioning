<?php
require "Position.php";




//On définit les paramètre d'entrée de notre aspirateur (dimention de la grille en x et y , position initiale en x et y, orientation intitale)
$aspirateur1 = new Position(10,10,5,5,'N'); 


//On appelle la méthode "bouger" en rentrant le parametre de mouvement (A -> anvancer ; D -> trouner à droite ; G -> tourner à gauche)
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('D');
$aspirateur1->bouger('A');
$aspirateur1->bouger('A');

//On appelle la méthode "voirPosition" pour vérifier la nouvelle position de l'aspirateur
$aspirateur1->voirPosition();

?>