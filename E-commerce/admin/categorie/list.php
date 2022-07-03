<?php
  session_start();
  include"../../inc/function.php";
  $categorie=getAllCat();
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
                <a class="nav-link active" href="list.php">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../produit/list.php">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
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
                <a class="nav-link" href="../panier/list.php">
                  <span data-feather="briefcase"></span>
                  Paniers
                </a>
              </li>
            
            </ul>

           
           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des categorie </h1>
            <div></div>
                <div>
                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</a> 
                </div>
          </div>
          <div>
          <?php 
                        if(isset($_GET['ajout']) && $_GET['ajout']=="ok"){
                          echo'<div class="alert alert-success">
                               Categorie est ajouter avec succes
                               </div>';
                        }
                        ?>
            
                  <?php 
                        if(isset($_GET['delete']) && $_GET['delete']=="ok"){
                          echo'<div class="alert alert-success">
                               Categorie est supprimer avec succes
                               </div>';
                        }
                        ?>
                        <?php 
                        if(isset($_GET['modif']) && $_GET['modif']=="ok"){
                          echo'<div class="alert alert-success">
                               Categorie est modifier  avec succes
                               </div>';
                        }
                        ?>

            </div>
          <table class="table">
  <thead>
      
         
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php  
          foreach($categorie as $val){
        echo ' <tr>
      <th scope="row">'.$val['Num'].'</th>
      <td>'.$val['Nom'].'</td>
      <td>'.$val['Description'].'</td>
      <td> <a href="modif.php"  class="btn btn-success" >Modifier</a> 
           <a href="supp.php?Num='.$val['Num'].'" class="btn btn-danger">Supprimer</a> 
      
    </td>
    </tr>';
}   
    ?>
  </tbody>
</table>

</div>
        </main>
      </div>
    </div>
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ajout.php" method="POST">
             <div class="form-group"> Nom:
                <input type="text" name="nom" class="form-control">
             </div>
             <div class="form-group">Description:
            <textarea  name="desc" class="form-control"></textarea>
             </div>
        
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
      </div>
      </form> 
    </div>
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
