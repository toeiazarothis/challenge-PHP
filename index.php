<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Trek & co</title>
  </head>
  <body class="pageindex">
    <?php
    include ("class/texteDePage.php");
    ?>
  <ul class="topnav">
      <li class="left"><a href="index.php"class="active">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="trek.php">Trek</a></li>
      <li><a href="prestation.php">Prestation</a></li>
      <li><a href="admin/"> &nbsp; <i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
    </ul>

    <div class="contenu">
      <?php
      afficherTexte();
      ?>
  </div>
  </body>
</html>
