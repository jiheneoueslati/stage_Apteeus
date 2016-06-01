<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="../experience.php">Ajouter une expérience</a></li>
           <li><a href="../upload.php">Uploader des fichiers</a></li>
      <li><a href="creationfichier.php">Extraction de fichiers</a></li>
      <li class="active"><a href="index.php">Mise à jour du fichier molécule</a></li>
        <li><a href="miseajourdmso.php">Tests DMSO</a></li>
    </ul>
  </div>
</nav>
  

</body>
</html>


<div class="container-fluid" style="background-color:#D40000;color:#fff;height:60px;">
<img src="logo.png">

</div>



<div class="row" style=margin:10px;>
<div class="col-sm-8" style=margin:10px;>

      <h3>Mettre à jour le fichier de correspondance entre molécules et positions</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Sélectionner molecules.xlsx:
    <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-link" >
    <input type="submit" value="Upload" name="submit" class="btn btn-danger">
</form>

<br>      
<a href="Fichiers/molecules.png" class="btn btn-danger" role="button">Extrait du fichier à importer</a>

</div>
</div>
</div>

</body>
</html>
