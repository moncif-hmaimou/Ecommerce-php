<?php
$num = $_GET['Num'];
if(isset($_POST['Modif'])){
    
    $nom=$_POST['nom'];
    $desc=$_POST['desc'];
    include"../../inc/function.php";
    $conn=conn();
    $requet="UPDATE Categorie SET Nom='$nom', Description='$desc' WHERE Num=$num";
    $reponse=$conn->query($requet);
    if($reponse){
        header('location:list.php?modif=ok');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
  </head>
<body>
  

<h1 class="text-center"><i> Modification Categorie:</i></h1>
          <div class="col-12 p-5">
            <form action="modif.php" method="POST" > 
           
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
                </div>
                <button   type="submit" class="btn btn-success" name="Modif">Modifier </button>
            </form>
                
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>


</html>