<?php
    $num= $_GET['Num'];
    include"../../inc/function.php";
    $conn=conn();
    $requet="DELETE FROM Produit WHERE Reference=$num";
    $reponse=$conn->query($requet);
    
    if($reponse){
        header('location:list.php?delete=ok');
    }