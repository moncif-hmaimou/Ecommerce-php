<?php
  session_start();
  include"../../inc/function.php";
  $panier=getAllPanier();
  $i=$_GET['id'];
  $cmd =getAllCmd($i);
  
 ?>

 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MIHO</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Home<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../categorie/list.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="../produit/list.php">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../client/list.php">
                  <span data-feather="users"></span>
                 Cliens
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../stock/list.php">
                  <span data-feather="bar-chart-2"></span>
                  Stock
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="briefcase"></span>
                  Commande
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../profile.php">
                  <span data-feather="user"></span>
                  Profile
                </a>
              </li>
            </ul>

           
           
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des Commande </h1>
            </div>
            <table class="table">
  <thead>
      
         
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
      <?php  
      $i=0;
          foreach($cmd as $val){
              $i++;
        echo ' <tr>
      <th scope="row">'.$i.'</th>
      <td>'.$val['Nom'].'</td>
      <td>'.$val['Prix'].'</td>
      <td>'.$val['Quantite'].'</td>
      <td>'.$val['Total'].'</td>
      <td>'.$val['Date'].'</td>
     
      
    
    </tr>';
} ?>  
<tr> 
    <a href="list.php" class="btn btn-danger"><--</a>
</tr>
    
  </tbody>
</table>

</div>
        
      </div>
     
    
  
                 
    
    


       
     
      
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  
    
</body>
</html>