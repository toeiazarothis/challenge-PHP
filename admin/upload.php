<?php

if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = '../txt/'; // dossier où sera déplacé le fichier
    $tmp_file = $_FILES['fichier']['tmp_name'];
    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
    // on vérifie maintenant l'extension
    /*$type_file = $_FILES['fichier']['type'];
    if( !strstr($type_file, 'txt'))
    {
        exit("Le fichier n'est pas de type texte");
    }*/
    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }
    echo "Le fichier a bien été uploadé";
}

?>
