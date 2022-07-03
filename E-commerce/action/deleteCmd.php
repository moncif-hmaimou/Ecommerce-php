<?php
   session_start();
   $id=$_GET['id'];
   $totalS=$_SESSION['Panier']['3'][$id][2];
   $_SESSION['Panier'][1]-=$totalS;
   unset($_SESSION['Panier'][3][$id]);
    
    header('location:../panier.php');

?>