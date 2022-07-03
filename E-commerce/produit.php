<?php
  session_start();
include"inc/function.php";
   $categorie=getAllCat();
   $produit=getAllProd();
   if(isset($_GET['Reference'])){
      $produit= getProdRef($_GET['Reference']);
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
    <?php include"inc/header.php"; ?>
  
 <div class="row col-16 mt-4">
     
    <div class="card col-5 offset-2" >
            <img src="images/<?php echo $produit['Image']; ?>"class="card-img-top" alt="..." width="280" height="500">
      <div class="card-body">
            <h5 class="card-title"><?php echo $produit['Nom']; ?></h5>
            <p class="card-text"><?php echo $produit['Description']; ?></p>
       </div>
            <ul class="list-group list-group-flush">
                     <li class="list-group-item"><?php echo $produit['Prix'] ."DH"; ?> </li>
                     <?php 
                     foreach($categorie as $key => $val){

                            if($val['Num']==$produit['NumCat']){

                                  echo '<a href="index.php?id='.$val['Num'].'" class="btn btn-dark mb-2">'.$val['Nom'].'</a>';
                            }
                     }
                     ?>
           </ul>
             
           <div class="d-flex">
                  <form class="d-flex" action="action/cmd.php" method="POST">
                        <input type="hidden" value="<?php echo $produit['Reference'];?>" name="produit">
                        <input type="number" name="qt" value="1"  class="form-control" placeholder="Quantité de Produit  ...">
                        <button type="submit"  name="cmd" class="btn btn-dark">Commander</button>
                  </form>
         </div>
    </div> 
    </div> 
    

    <?php 
       include"inc/footer.php";
  ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>