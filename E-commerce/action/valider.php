<?php
      session_start();
      if($_SESSION['Email']){
        if($_SESSION['Etat']==1){
    include "../inc/function.php";
    $conn=conn();
    $id_user=$_SESSION['Id'];
    $prixT=$_SESSION['Panier'][1];
    $date=date("Y-m-d");
    


      $requet="INSERT INTO Panier(NumClient,Total,Date) VALUE( $id_user,$prixT,'$date')";
       $reponse=$conn->query($requet);
       $idP=$conn->lastInsertId();
       $commande=$_SESSION['Panier'][3];
       foreach($commande as $val){
        $idPro=$val[0];
        $qt=$val[1];
        $prixTC=$val[2];
        $dateC=$val[3];
        $requet="INSERT INTO Commande(Produit,Quantite,NumPanier,Total,Date) VALUE($idPro,$qt,$idP,$prixTC,$dateC)";
       $reponse=$conn->query($requet);

    }
    $_SESSION['Panier']=null;
    header('location:../index.php');
  } else{
    header('location:../index.php');
  }
  } else{
    header('location:../connexion.php');
   } 
      ?>