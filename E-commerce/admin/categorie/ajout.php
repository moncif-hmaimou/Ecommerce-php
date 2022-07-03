<?php
    include "../../inc/function.php";
    session_start();
    if(isset($_POST['ajout'])){
        $conn=conn();
        $nom=$_POST['nom'];
        $desc=$_POST['desc'];
        $cr=$_SESSION['Id'];
        $requet="INSERT INTO Categorie(Nom,Description,Createur) VALUE ('$nom','$desc',$cr)";
        $reponse=$conn->query($requet);
        if($reponse){
            header('location:list.php?ajout=ok');
        }
    }