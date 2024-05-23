<?php
  require_once ('connect.php');


?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
  <title>Depôt</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" >

</head>
<body>

  <?php  
    include 'navbar.php';
   include 'recher.php';
   ?>
<div class="container">
<form method="GET">
 <div class="form-group row">
       <div class="col-6">
           <input type="search" name="search" class="form-control">
           </div>
           <div class="col-md-3">
               <button class="btn btn-success" type="submit">Recherche</button>
           </div>
       
   </div>
              </form>
              </div>
 
  <div class="container">
    <div class="row pt-4">
      <h2>Listes de depôt</h2>

      <a href="inde.php">
        <button class="btn btn-danger" type="">
          Ajouter
        </button>
      </a>
    </div>

    <table class="table table-striped mt-3">
      <thead>
        <tr>
          <th>id</th>
          <th>Titre</th>
          <th>Auteur</th>
          <th>Domaine</th>
          <th>Filiére</th>
          <th>Université</th>
           <th>Resumé</th>
          <th>Année</th>
          <th>Théme</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
      


      <?php 
            $ReadSql = "SELECT * FROM `memoire` ";
            $res = mysqli_query($con,$ReadSql);

            while ($r = mysqli_fetch_assoc($res)){
        ?>
        

        <tr>
         
          <th scope="row"><?php echo $r['id']; ?></th>
          <td><?php echo $r['titre']?></td>
		  <td><?php echo $r['auteur']?></td>
          <td><?php echo $r['domaine']; ?></td>  
          <td><?php echo $r['filiere']; ?></td>
          <td><?php echo $r['universite']; ?></td> 
          <td><?php echo $r['resume']; ?></td>
          <td><?php echo $r['annee']; ?></td>
          <td><a href="tele.php?file=<?php echo $r['theme'] ?>">Télécharger</a></td>
    
          <td>
            <a href="update.php?id=<?php echo $r['id']; ?>" class="m-2">
              <i class="fa fa-edit fa-1x"></i>
            </a>
            <i class="fa fa-trash fa-1x red-icon"
             data-bs-toggle="modal"
             data-bs-target="#exampleModal<?php echo $r['id']; ?>" class="m-2">
             
             </i>

             <div class="modal fade" id="exampleModal<?php echo $r['id']; ?>" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <p>Etes vous sur de vouloir supprimer?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"
                    data-bs-dismiss="modal">Annuler</button>
                    <a href="delete.php?id=<?php echo $r['id']; ?>">
                      <button class="btn btn-danger" type="button">Confirmer</button>
                    </a>
                  </div>
                </div>
              </div>
             </div>
          </td>
        </tr>
      <?php } ?>
   </tbody>
    </table>


  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
<script src="js/Jquery.js"></script>
</body>
</html>