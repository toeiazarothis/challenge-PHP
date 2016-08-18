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
    <div class="contenucentrer">
      <form method="post" enctype="multipart/form-data" action="upload.php">
        <p>
          <input type="file" name="fichier" size="30">
          <input type="submit" name="upload" value="Uploader">
        </p>
      </form>
    </div>
  </body>
</html>
