<?php
session_start();
require_once ('connect.php');

        if (isset($_POST['btnajout'])) {
              $Titre = ($_POST['titre']);	  
              $Auteur = ($_POST['auteur']);
              $Domaine = $_POST['domaine'];
              $Filiere = $_POST['filiere'];
              $Universite = $_POST['universite'];
              $Resume = $_POST['resume'];
              $Annee = $_POST['annee'];
              $fileName = $_FILES['theme']['name'];   
              $fileTmpName = $_FILES['theme']['tmp_name']; 
              $path = "files/".$fileName;
              
//              $image=$_FILES['img']['tmp_name'];
//              $traget="files/".$_FILES['img']['name'];
//              move_uploaded_file($image,$traget);
                
    $reqajout = "INSERT INTO `memoire` (titre,auteur,domaine,Filiere,universite,resume,annee,theme) values
 ('$Titre','$Auteur','$Domaine','$Filiere','$Universite',' $Resume','$Annee','$fileName')";
             $resultat= mysqli_query($con,$reqajout);
             if ($resultat) {
                 move_uploaded_file($fileTmpName,$path);
             	echo "<h3>valider avec succes<h/3>";
             }


             else{
           echo "<h3>Insertion des donnes  pas de valider</h3>";
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
  <link rel="stylesheet" href="../sk.css" >
</head>
<body>
  <?php  
    include 'navbar.php';
   ?>

  <div class="container">
    <div class="row pt-4">
      <?php if (isset($message)) { ?>
        <div class="alert alert-success" role="alert">
          <?php echo $message; ?>
        </div> <?php } ?>

        <?php if (isset($erreur)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $erreur; ?>
        </div> <?php } ?>
        <style>
 fieldset {
                background-color: #eeeeee;
            }
            legend{
               background-color: gray;
                color: white;
                padding: 5px 10px;
            }
            input {
                margin: 5px;
            }
        </style>
         
      <form action="inde.php" method="POST" class="form-horizontal col-md-6 pt-4" enctype="multipart/form-data">
      <fieldset>
         <legend> <h1>Enregistrement</h1></legend>
              
               <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Titre</label>
          <div class="col-sm-10">
            <input type="text" name="titre" placeholder="Titre" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Auteur</label>
          <div class="col-sm-10">
            <input type="text" name="auteur" placeholder="Auteur" class="form-control" id="input1">
          </div>
        </div>

          
         <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Domaine</label>
          <div class="col-sm-10">
            <input type="text" name="domaine" placeholder="Domaine" class="form-control" id="input1">
          </div>
        </div>

        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Filiére</label>
          <div class="col-sm-5">
            <input type="text" name="filiere" placeholder="Filiére" class="form-control" id="input1">
          </div>
        </div>


        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Université</label>
          <div class="col-sm-5">
            <input type="text" name="universite" placeholder="Université" class="form-control" id="input1">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Resumé</label>
          <div class="col-sm-5">
            <input type="text" name="resume" placeholder="resume" class="form-control" id="input1">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Année</label>
          <div class="col-sm-5">
            <input type="date" name="annee" placeholder="Année"Longueur class="form-control" id="input1">
          </div>
        </div>
        
    
        <div class="form-group">
          <label for="input1" class="col-sm-2 control-label">Théme</label>
          <div class="col-sm-5">
            <input type="file" name="theme">
          </div>
        </div>
        <div class="pt-4">
          <input type="submit" name="btnajout" value="envoie" class="btn btn-warning m-3">
          <a href="index.php">
            <button class="btn btn-dark m-3" type="button">
              voir la liste
            </button>
          </a>
        </div>
         </fieldset>
      </form>
     
    </div>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
<script src="js/Jquery.js"></script>
</body>
</html>
