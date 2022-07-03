<?php 
    function conn(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=ecommerce','root','');
            
            
          } catch(PDOException $e) {
            die("La connexion à la base a échoué ".
        
        "pour la raison suivante: ".$e->getMessage());
        
        }
        return $conn;

    }
   function getAllCat(){
   
    $conn=conn();
 $requet="SELECT * FROM Categorie ";
 $reponse=$conn->query($requet);
 $categorie=$reponse->fetchAll();
    
   return $categorie;
    
   }
      function getAllProd(){
        $conn=conn();
        $requet="SELECT * FROM Produit ";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetchAll();
           
          return $produit;

      }

       function getProdN($prod){
        $conn=conn();
        $requet="SELECT * FROM Produit WHERE Nom LIKE '%$prod%' ";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetchAll();
           
          return $produit;

       }
       function getProdRef($ref){
        $conn=conn();
        $requet="SELECT * FROM Produit WHERE Reference = $ref";
        $reponse=$conn->query($requet);
        $produit=$reponse->fetch();
           
          return $produit;

       }
       function  addClient($data){
        $conn=conn();
        $nom=$data['nom'];
        $prenom=$data['prenom'];
        $tel=$data['tel'];
        $email=$data['email'];
        $mp=md5($data['pass']);
        $requet="INSERT INTO Client(Nom,Prenom,Tel,Email,Mp) VALUES('$nom','$prenom','$tel','$email','$mp')";
        $reponse=$conn->query($requet);
        if($reponse){
            return true;
        }
        else {
           return false;
        } 
    }
     function connectClient($data){
        $conn=conn();
        $email=$data['email'];
        $mp=md5($data['mp']);
        $requet="SELECT * FROM Client WHERE Email='$email' AND Mp ='$mp' ";
        $reponse=$conn->query($requet);
        $user=$reponse->fetch();
        return $user;
     }
     function connectAdmin($data){
      $conn=conn();
      $email=$data['email'];
      $mp=md5($data['mp']);
      $requet="SELECT * FROM Admin WHERE Email='$email' AND Mp ='$mp' ";
      $reponse=$conn->query($requet);
      $user=$reponse->fetch();
      return $user; 
     }
       
     function getAllCl(){
      $conn=conn();
      $requet="SELECT * FROM Client ";
      $reponse=$conn->query($requet);
      $client=$reponse->fetchAll();
         
        return $client;
     }
      function getAllStock(){
        $conn=conn();
        $requet="SELECT * FROM Produit , Stock WHERE Reference=RefProd";
        $reponse=$conn->query($requet);
        $stock=$reponse->fetchAll();
           
          return $stock;
      }
      function getAllPanier(){
        $conn=conn();
        $requet="SELECT * FROM Panier , Client WHERE NumClient=Id";
        $reponse=$conn->query($requet);
        $panier=$reponse->fetchAll();
           
          return $panier;
      }
      function getPanier($id){
        $conn=conn();
        $requet="SELECT * FROM Panier , Client WHERE NumClient=$id";
        $reponse=$conn->query($requet);
        $panier=$reponse->fetchAll();
           
          return $panier;
      }
      function getAllCmd($i){
        $conn=conn();
      $requet="SELECT * FROM Commande , Produit WHERE Produit=Reference  AND NumPanier=$i";
      $reponse=$conn->query($requet);
      $cmd=$reponse->fetchAll();
         
        return $cmd;
      }
      function getPanier1($id){
        $conn=conn();
        $requet="SELECT * FROM Panier WHERE NumClient=$id";
        $reponse=$conn->query($requet);
        $panier=$reponse->fetchAll();
           
          return $panier;
      }
      

   ?>