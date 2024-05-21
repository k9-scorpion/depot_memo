<?php
require('connect.php');

if(isset($_GET['search']) AND !empty($_GET['search'])){
    
    $usersSearch = $_GET['search'];
    
    $ReadSql = $con->query('SELECT Titre,Auteur  FROM `memoire` WHERE Titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC');
}
?> 
<!--
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>-->
