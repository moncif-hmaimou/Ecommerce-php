<?php
 include("../../inc/function.php");
 session_start();
    if(isset($_POST['ajout'])){
        $conn=conn();
        $nom=$_POST['nom'];
        $desc=$_POST['desc'];
        $prix=$_POST['prix'];
        $image=$_POST['img'];
        $cat=$_POST['cat'];
        $qnt=$_POST['quant'];
        $cr=$_SESSION['Id'];
        $requet="INSERT INTO Produit(Nom,Description,Prix,Image,NumCat,NumCreateur) VALUE ('$nom','$desc',$prix,'$image',$cat,$cr)";
        $reponse=$conn->query($requet);
        $pro_id= $conn->lastInsertId();
        if($reponse){
        $requetStock="INSERT INTO Stock(RefProd,Quantite,NumAdmin) VALUE ($pro_id,$qnt,$cr)";
        $reponseStock=$conn->query($requetStock);
            if($reponseStock){
        
            header('location:list.php?ajout=ok');
          }
        }
    }