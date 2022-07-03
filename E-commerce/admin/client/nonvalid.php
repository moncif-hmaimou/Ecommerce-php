<?php
   $id=$_GET['Num']; 
   
    $num= $_GET['Num'];
    include "../../inc/function.php";
    $conn=conn();
    $requet="UPDATE Client SET Etat=0 WHERE Id=$num";
    $reponse=$conn->query($requet);
    if($reponse){
        header('location:list.php?delete=ok');
    }