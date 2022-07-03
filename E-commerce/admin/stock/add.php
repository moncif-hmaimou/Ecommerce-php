<?php
    $num= $_GET['Num'];
    
    include "../../inc/function.php";
    $conn=conn();
    $requet1="SELECT * FROM Stock WHERE Num=$num";
    $reponse1=$conn->query($requet1);
     
     foreach($reponse1 as $key){
       $qt =$key['Quantite'];
     }
     $qt=$qt+1;
     $requet="UPDATE Stock SET Quantite=$qt WHERE Num=$num";
     $reponse=$conn->query($requet);
     header('location:list.php');
     

   