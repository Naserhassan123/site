<?php
// la partie connection 
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$sum= mysqli_connect($server,$user,$password,$base);
// la partie recuperation

// $ID=$_POST['num_client'];
$Nom=$_POST['Nom_client'];
$Prenom=$_POST['Prenom_client'];
$Telephone=$_POST['tel_client'];
$Adresse=$_POST['Adresse_client'];
$Email=$_POST['Email_client'];
$MP=$_POST['Mot_passe'];
// la partie de recrutement
$a=("INSERT INTO client values(NULL,'$Nom','$Prenom','$Telephone','$Adresse','$Email','$MP')");
if(mysqli_query($sum,$a)){


	header("location:connexionphp_incription ");
  
	
}


   else{
   echo("non reçue");
    
     }

?>