<?php

require_once ('connect.php');

  $id = $_GET['id'];
  $DelSql = "DELETE FROM `memoire` WHERE id=$id";

  $res = mysqli_query($con, $DelSql);
  if ($res) {
    header("Location: index.php");
  }else{
    echo "imposible de supprimer";
  }

?>
