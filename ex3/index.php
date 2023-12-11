<?php 

include ('classes/Formacio.php');
include ('classes/Especialitzacio.php');
include ('classes/Sprint.php');

$formacio1 =  new Formacio("Fonaments de la programació", "La base per començar a programar :)");
$formacio2 =  new Formacio("Especilització mentoritzada", "La base tècnica hard");
$formacio3 =  new Formacio("Projecte", "Posa en pràctica el que has aprés!");
$formacio4 =  new Formacio("Cerca de feina", "El mercat laboral t'espera!");

$sprint1 = new Sprint("PHP i Maquetació",21);
$sprint2 = new Sprint("Bases de dades",15);
$sprint3 = new Sprint("Patrons de disseny",15);
$sprint4 = new Sprint("Laravel MVC",15);
$sprint5 = new Sprint("Laravel API",21);

$sprints = [$sprint1, $sprint2, $sprint3, $sprint4, $sprint5];

$especialitat_mentoritzada = new Especialitat("FullstackPHP", $sprints);
$formacio2->addEspecialitat($especialitat_mentoritzada);

var_dump($formacio2);