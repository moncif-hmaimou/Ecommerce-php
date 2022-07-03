<?php
 include("../../inc/function.php");
 session_start();
    
        $conn=conn();
        $nom=$_POST['nom'];
        $pre=$_POST['pre'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $mp=$_POST['mp'];
        $requet="INSERT INTO Client(Nom,Prenom,Tel,Email,Mp,Etat) VALUES('$nom','$pre','$tel','$email','$mp',1)";
        $reponse=$conn->query($requet);
        
        
            header('location:list.php?ajout=ok');
          
        