<?php
include "../../inc/function.php";
$conn=conn();
$num=$_GET['id'];
$requet="UPDATE Panier SET EtatP=2 WHERE Num=$num";
    $reponse=$conn->query($requet);
    header('location:list.php');

?>