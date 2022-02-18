<?php
  include 'connexion.php';

  if(isset( $_POST['Nom']) && isset( $_POST['Prenom']) &&isset( $_POST['Mail']) && isset( $_POST['Mdp']) && isset( $_POST['Tel']) && isset( $_POST['Date'])){
    $Nom = $_POST['Nom']; 
    $prenom = $_POST['Prenom'];
    $mail = $_POST['Mail']; 
    $mdp = $_POST['Mdp'];
    $tel = $_POST['Tel'];
    $date = $_POST['Date'];

    echo "<p>".$Nom.",".$prenom.",".$mail.",".$mdp.",".$tel.",".$date."</p>";
    $sql = "INSERT INTO `exousers`(`Nom`,`Prenom`,`date`,`mail`,`mobile`,`password`) VALUES ('".$Nom."','".$prenom."','".$date."','".$mail."','" .$tel."','" .$mdp."')"; 
    $prepare = $bdd->prepare($sql);   
     $prepare ->execute();
    $result = $prepare->fetchAll();
    var_dump($sql);

   }else{
        echo "marche pas";
}
?>
<script type="text/javascript" src="../js/register.js"></script>