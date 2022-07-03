<?php
session_start();
if(isset($_SESSION['Nom'])){
  header('location:panier/list.php');
}
include"../inc/function.php";
   
       $user=true;
   if(isset($_POST['sauv'])){
      $user =connectAdmin($_POST);
      if(is_array($user) && count($user) > 0){
        session_start();
        $_SESSION['Id']=$user['Id'];
        $_SESSION['Nom']=$user['Nom'];
        $_SESSION['Email']=$user['Email'];
        $_SESSION['Mp']=$user['Mp'];
           header('location:panier/list.php');
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

          <div class="col-12 p-5">
            <h1 class="text-center">Espace Admin : Connexion</h1>
            <form action="index.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
              
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="mp">
                  </div>
                
                <button type="submit" class="btn btn-primary" name="sauv">sauvgarder  </button>
              </form>

          </div>
          <?php 
       include"../inc/footer.php";
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
<?php 
    if(!$user) {echo " 
    <script>
Swal.fire({
position: 'top-end',
icon: 'error',
title: 'Email ou Mot de Passe Incorrect',
showConfirmButton: false,
timer: 1500
})

</script>";
}
     ?> 
</html>