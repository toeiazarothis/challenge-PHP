<?php
function afficherFichier(){
  $chemin = $_SERVER['PHP_SELF'];
  $fichier = basename ($chemin,'.php');
  return $fichier;
}

function afficherTexte(){
  $texte = 'txt/page'.afficherFichier().'.txt';
  readfile ($texte);}
/* include ("txt/pageindex.txt") */

?>
