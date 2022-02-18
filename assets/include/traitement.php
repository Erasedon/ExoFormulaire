<?php
  include 'connexion.php';

  if(isset( $_POST['Nom']) && isset( $_POST['Prenom']) &&isset( $_POST['Mail']) && isset( $_POST['Mdp']) && isset( $_POST['Tel']) && isset( $_POST['Date'])){
    $Nom = $_POST['Nom']; 
    $prenom = $_POST['Prenom'];
    $mail = $_POST['Mail']; 
    $mdp = $_POST['Mdp'];
    $tel = $_POST['Tel'];
    $date = $_POST['Date'];
        
    $aujourdhui = date("Y-m-d");
    $diff = date_diff(date_create($date), date_create($aujourdhui));
    $sql = "INSERT INTO `exousers`(`Nom`,`Prenom`,`date`,`mail`,`mobile`,`password`) VALUES ('".$Nom."','".$prenom."','".$date."','".$mail."','" .$tel."','" .$mdp."')"; 
    $prepare = $bdd->prepare($sql);   
     $prepare ->execute();
    $result = $prepare->fetchAll();
    
    if($diff->format('%y') > 18){
      header("Location: https://www.amazon.fr/ ", true, 301);
      exit();
    }else{
      header("Location: https://www.youtube.com/watch?v=iuV5G1hkEYE", true, 301);
      exit();
    }

   }else{
        echo "marche pas c'est vide";
}


?>
