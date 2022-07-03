<?php
session_start();
include"inc/function.php";
$total=0;
if(isset($_SESSION['Panier'])){
$total= $_SESSION['Panier'][1];
}
   $categorie=getAllCat();
   $produit=getAllProd();
   if(isset($_POST['recherche'])){
     if(!empty($_POST['search'])){
      $produit=getProdN($_POST['search']);     }
     else {
      $produit=getAllProd();
       
     }
   }
   if(isset($_SESSION['Panier'])){
       if(isset($_SESSION['Panier'][3])>0){
           $commande=$_SESSION['Panier'][3];
       }
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
   ?>
     <?php
     if(isset($_SESSION['Etat']) && $_SESSION['Etat'] == 0){
    echo'<div class="alert alert-danger">
         Compte non Valide !!!
    </div>' ;}
    ?>

      <div class="row col-12 mt-4 p-5">
          <h1>Panier Client</h1>
  <table class="table table-dark">
        <thead>
             <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                    
            </tr>
        </thead>
        <tbody>
            <?php
              foreach($commande as $key=>$val){
          echo' <tr>
                    <th scope="row">'.($key+1).'</th>
                    <td>'.$val[4].'</td>
                    <td>'.$val[1].' pieces</td>
                    <td>'.$val[2].'DH</td>
                    <td><a href="action/deleteCmd.php?id='.$key.'" class="btn btn-danger">Supprimer<a></td>

            </tr>';}
           ?>
        </tbody>
  </table>
  <div class="text-end"> 
             <h3>Total :<?php echo $total ; ?>DH</h3>
           <hr>
           </div>
            <h3>Type de paiment:</h3>
           <div> Par Carte
              <input type="radio" id="mode" name="oo">
              <div> Par livraison
              <input type="radio" id="mode" name="oo">

           </div>
           <div class="text-end">
           <a href="action/valider.php" <?php if(isset($_SESSION['Etat']) && $_SESSION['Etat'] == 0) {echo 'disabled' ;} ?> class="btn btn-dark" style="width:120px">Valider</a>
           </div>
       <?php
       include"inc/footer.php";
  ?>
     
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>