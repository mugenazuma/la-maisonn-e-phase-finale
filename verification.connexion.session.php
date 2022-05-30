<?php

session_start();

if(isset($_POST['name']) && isset($_POST['password']))
{
    // connexion à la base de données
    
    require ("connexion_BDD.php"); // Inclusion de notre bibliothèque de fonctions
    
    $db = connexionBase("localhost","root","","la_maisonnee") // Appel de la fonction de connexion
           or die('could not connect to database');
    

   // pour éviter les injections xml et sql, pour qu'il soit interprété en code
    $empl_lastname = htmlspecialchars($_POST['name']);                     //htmlspecialchars — Convertit les caractères spéciaux en entités HTML
    $empl_password = htmlspecialchars($_POST['password']);
    
    if($empl_lastname !== "" && $empl_password !== "")
    {
        $requete = "SELECT count(*)as 'resultat' FROM employee where 
              empl_lastname = '".$empl_lastname."' and empl_password = '".$empl_password."'" ;
        $result = $db->query($requete);
        
        $users=$result->fetch(PDO::FETCH_OBJ);
   
      $resultat=$users->resultat;
      
        if($resultat!=0) // prise en compte de tout les champs renseigné
        {
           $_SESSION['empl_lastname']= $empl_lastname ;
           header('Location: index.php');
           
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // informations incorrect
        }
      }
    else
    {
      header('Location: connexion.php?erreur=2'); // informations vide    
}
}
?>