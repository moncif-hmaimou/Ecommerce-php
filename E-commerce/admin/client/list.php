<?php
  session_start();
  include"../../inc/function.php";
  $client = getAllCl();
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
                <a class="nav-link " href="../categorie/list.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="../produit/list.php">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#">
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
                <a class="nav-link" href="../Panier/list.php">
                  <span data-feather="briefcase"></span>
                  Paniers
                </a>
              </li>
             
            </ul>

           
           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des Clients </h1>
            <div></div>
                <div>
                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</a> 
                </div>
          </div>
          <div>
          <?php 
                        if(isset($_GET['ajout']) && $_GET['ajout']=="ok"){
                          echo'<div class="alert alert-success">
                               Client valider
                               </div>';
                        }
                        ?>
            
                

            </div>
            <table class="table">
  <thead>
      
         
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Tel</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php  
          foreach($client as $val){
            
        echo ' <tr>
      <td>'.$val['Nom'].'</td>
      <td>'.$val['Prenom'].'</td>
      <td>'.$val['Tel'].'</td>
      <td>'.$val['Email'].'</td>';
     
     
        if($val['Etat']==0){
       echo' <td><a href="valid.php?Num='.$val['Id'].'" class="btn btn-success">Activé</a> 
        <button type="button" disabled class="btn">Desactivé</button>
        <a href="supp.php?Num='.$val['Id'].'" class="btn btn-danger">Supprimer</a>

        </td>';
   
      }
      if($val['Etat']==1){
        echo' 
         <td><button type="button" disabled class="btn">Activé</button>
         
         <a href="nonvalid.php?Num='.$val['Id'].'" class="btn btn-warning">Désactivé</a> 
         <a href="supp.php?Num='.$val['Id'].'" class="btn btn-danger">Supprimer</a>

         </td>';
    
       }
    
   echo '</tr>';
  
}   
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <form action="ajout.php" method="POST" enctype="multipart/form-data">
             <div class="form-group"> Nom:
                <input type="text" name="nom" class="form-control">
             </div>
             <div class="form-group"> Prenom:
                <input type="text" name="pre" class="form-control">
             </div>
             
             <div class="form-group"> Tel:
                <input type="text" name="tel" class="form-control">
             </div>
             <div class="form-group"> Email:
                <input type="email" name="email" class="form-control">
             </div>
             <div class="from-group">Mot de passe:
          <input type="text" name="mp" class="form-control">

        </div>
       <div class="form-group"> 
                <input type="hidden" name="admin" value="<?php echo $_SESSION['Id']?>" >
             
                
            
           
             </div>
     
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
   
  </tbody>
</table>

</div>
        </main>
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