<?php
session_start();
include"inc/function.php";
   $categorie=getAllCat();
   $produit=getAllProd();
   if(isset($_POST['recherche'])){
     if(!empty($_POST['search'])){
      $produit=getProdN($_POST['search']);     }
     else {
      $produit=getAllProd();
       
     }
   } 
      $ic=0;
   if(isset($_GET['id'])){
     $ic=$_GET['id'];
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIHO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include"inc/header.php"; 
   
                        if(isset($_GET['ajoutC']) && $_GET['ajoutC']=="ok"){
                          echo'<div class="alert alert-success">
                              La Commande est ajouter avec succes
                               </div>';
                        }
                        ?>

      <div class="row col-12 mt-4">
        <?php  
             foreach($produit as $val){
               if($ic==0){
             echo' <div class="col-3 p-3">
              <div class="card" style="width: 18rem;">
                  <img src="images/'.$val['Image'].'" class="card-img-top" alt="..." height="270">
                  <div class="card-body">
                    <h5 class="card-title">'.$val['Nom'].'</h5>
                    <p class="card-text">'.$val['Description'].'</p>
                    <a href="produit.php?Reference='.$val['Reference'].'" class="btn btn-dark">Afficher</a>
                  </div>
                </div>
            </div>';
               }
               else{
                 if($val['NumCat']==$ic){
                  echo' <div class="col-3">
                  <div class="card" style="width: 18rem;">
                      <img src="images/'.$val['Image'].'" class="card-img-top" alt="..." height="270">
                      <div class="card-body">
                        <h5 class="card-title">'.$val['Nom'].'</h5>
                        <p class="card-text">'.$val['Description'].'</p>
                        <a href="produit.php?Reference='.$val['Reference'].'" class="btn btn-dark">Afficher</a>
                      </div>
                    </div>
                </div>';
                 }

               }
             }
             ?>
           
          
        <?php 
       include"inc/footer.php";
  ?>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>