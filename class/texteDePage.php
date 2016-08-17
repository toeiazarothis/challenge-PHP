<?php
function TexteDePage {
  if ($_SERVER['SCRIPT_NAME'] == "/challenge-PHP/index.php"){
    $page_en_cours = index
  }
  if ($_SERVER['SCRIPT_NAME'] == "/challenge-PHP/prestation.php") {
    $page_en_cours = prestation
  }
  if ($_SERVER['SCRIPT_NAME'] == "/challenge-PHP/trek.php") {
    $page_en_cours = trek
  }
  if ($_SERVER['SCRIPT_NAME'] == "/challenge-PHP/contact.php") {
    $page_en_cours = contact
  }
}




/* include ("txt/pageindex.txt") */
?>
