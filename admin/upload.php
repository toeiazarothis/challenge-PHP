<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>AJout d'un fichier</title>
  </head>
  <body>
    <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <li><a href="ajoutFichier.php" class="active">Ajout</a></li>
        <li><a href="creation.php">Creation</a></li>
      </ul>
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
</body>
</html>
