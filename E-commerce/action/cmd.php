   <?php
    session_start();
     
       include "../inc/function.php";
       $conn=conn();
        $id_user=$_SESSION['Id'];
      $date=date("Y-m-d");  
        $id=$_POST['produit'];
        $requet="SELECT Prix,Nom FROM Produit WHERE Reference=$id";
        $reponse=$conn->query($requet);
        $T=$reponse->fetch();
         $qt=$_POST['qt'];
        $prixT=$T['Prix'] * $qt;
        $nomP=$T['Nom'];
        if(!isset($_SESSION['Panier'])){
            $_SESSION['Panier'] = array($id_user,0,$date,array());
        } 
        $_SESSION['Panier'][1]+= $prixT;
        $_SESSION['Panier'][3][]=array($id,$qt,$prixT,$date,$nomP);
        
        header('location:../index.php');
    //    $requet="INSERT INTO Panier(NumClient,Total,Date) VALUE( $id_user,$prixT,'$date')";
    //    $reponse=$conn->query($requet);
    //     $idP=$conn->lastInsertId();

    //     $requet="INSERT INTO Commande(Produit,Quantite,NumPanier,Total,Date) VALUE($id,$qt,$idP,$prixT,$date)";
    //     $reponse=$conn->query($requet);
        
    //         if($reponse){
    //             header('location:../index.php?ajoutC=ok');
    //         }
    
      
       
    
     ?>  