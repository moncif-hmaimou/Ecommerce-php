<?php
    $num= $_GET['Num'];
    include "../../inc/function.php";
    $conn=conn();
    $requet="DELETE FROM Categorie WHERE Num=$num";
    $reponse=$conn->query($requet);
    if($reponse){
        header('location:list.php?delete=ok');
    }