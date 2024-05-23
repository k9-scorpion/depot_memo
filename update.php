
<?php

require_once ('connect.php');

  $id = $_GET['id'];
  $selSql = "SELECT * FROM `memoire` WHERE id=$id";
  $res = mysqli_query($con, $selSql);
  $r = mysqli_fetch_assoc($res);

  if (isset($_POST) & !empty($_POST)) {
      
    $Titre = ($_POST['titre']);
    $Auteur = ($_POST['auteur']);
    $Domaine = $_POST['domaine'];
    $Filiere = $_POST['filiere'];
    $Universite = $_POST['universite'];
    $Annee = $_POST['annee'];
  
  
//   $img_name=$_FILE['img_upload']['name'];
//      $tmp_img_name=$_FILE['img_upload']['tmp_name'];
//      move_uploaded_file($tmp_img_name, $img_name);
    $UpdateSql = "UPDATE `memoire` SET titre='$Titre', auteur='$Auteur',domaine='$Domaine', filiere='$Filiere' , universite='$Universite' WHERE id=$id ";

    $res = mysqli_query($con, $UpdateSql);
    if ($res) {
      header("location: index.php");
    }else{
      $erreur = "la mise à jour a échoué.";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <title>Gestion</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >
</head>
<body>
  <?php  
    include 'navbar.php';
   ?>

  <div class="container">
    <div class="row pt-4">
        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>

      <form action="" method="POST" class="form-horizontal col-md-6 pt-4" enctype='multipart/form-data'>
        <h2>Modifier</h2>

     
       <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Titre</label>
          <div class="col-sm-10">
            <input type="text" name="titre" placeholder="Titre" class="form-control" id="input1"
            value="<?php echo $r['titre'] ?>">
          </div>
        </div>
           <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Auteur</label>
          <div class="col-sm-10">
            <input type="text" name="auteur" placeholder="Auteur" class="form-control" id="input1"
            value="<?php echo $r['auteur'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Domaine</label>
          <div class="col-sm-10">
            <input type="text" name="domaine" placeholder="Domaine" class="form-control" id="input1"
            value="<?php echo $r['domaine'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Filiére</label>
          <div class="col-sm-10">
            <input type="text" name="filiere" placeholder="Filiére" class="form-control" id="input1"
            value="<?php echo $r['filiere'] ?>">
          </div>
        </div>
         <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Université</label>
          <div class="col-sm-10">
            <input type="text" name="universite" placeholder="Université" class="form-control" id="input1"
            value="<?php echo $r['universite'] ?>">
          </div>
           <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Resumé</label>
          <div class="col-sm-10">
            <input type="text" name="resume" placeholder="resume" class="form-control" id="input1"
            value="<?php echo $r['resume'] ?>">
          </div>
        </div>
        </div>
         <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Année</label>
          <div class="col-sm-10">
            <input type="date" name="annee" placeholder="Année" class="form-control" id="input1"
            value="<?php echo $r['annee'] ?>">
          </div>
        </div>
      
 <div class="pt-4">
          <input type="submit" value="submit" class="btn btn-primary m-3">
          <a href="index.php">
            <button class="btn btn-danger m-3" type="button">
              voir la liste
            </button>
          </a>
        </div>
      </form>
    </div>
  </div>
 
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
<script src="js/Jquery.js"></script>
</body>
</html>














