<?php
    $num= $_GET['Num'];
    include"../../inc/function.php";
    $conn=conn();
    $requet="DELETE FROM Client WHERE Id=$num";
    $reponse=$conn->query($requet);
    $requet1="DELETE FROM Panier WHERE NumClient=$num";
    $reponse1=$conn->query($requet1);
    
        header('location:list.php?delete=ok');
    