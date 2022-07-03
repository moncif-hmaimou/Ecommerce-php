       <?php 
            session_start();
            ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">MIHO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                        foreach($categorie as $val){
                         echo' <li><a class="dropdown-item" href="index.php?id='.$val['Num'].'">'.$val['Nom'].'</a></li>';
                        }
                 ?>
                </ul>
                <?php
                   
                     
                    if($_SESSION['Panier'] && is_array($_SESSION['Panier'][3])){
                     echo' <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="panier.php">Panier<span class="text-danger">('.count($_SESSION['Panier'][3]).')</span></a>
                    </li>';
                  } else {
                    echo' <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="panier.php">Panier<span class="text-danger">(0)</span></a>
                  </li>';
                  }
                  if(!isset($_SESSION['Nom'])){
                    
                      echo'<li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="connexion.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="registre.php ">Nv Compte</a>
                    </li>';
                    }
                    
                ?>  
              
            </ul>
            <form class="d-flex" action="index.php" method="POST"  >
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-light" type="submit" name="recherche"><i class="fa fa-search"></i></button>
              <?php
                    if(isset($_SESSION['Nom'])){
                     echo' <a href="deconnexion.php" class="btn btn-dark">Deconnexion</a>';
                    }
                    ?>
                    
            </form>
          </div>
        </div>
      </nav>