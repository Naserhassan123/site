<!DOCTYPE html>
<html>

<head>
	<title>inscrire</title>
	<link rel="stylesheet" href="InscriptionT.css">
	<link rel="stylesheet" href="ACCEUIL_N.css">

</head>

<body><div class="container">
        <div class="row">
            <nav class="navbar">
			<img src="serp0.jpeg" alt="" width="4%"  >
                <ul>
				    <li> <a href="Adminis.html"> HOME </a> </li>
                    <li> <a href="AfficherMedicament_Admin.php"> AFFICHER </a> </li>
                    <li> <a href="AJOUTERmedicamentHTML.php"> AJOUTER </a> </li>
                    <li> <a href="ModifierHTML.php"> MODIFIER </a> </li>
                    <li> <a href="">SUPPRIMER</a> </li>
                    <li> <a href="AfficherCommande.php">COMMANDES</a> </li>
                </ul>

            </nav>
	<center>
		<form method="POST" action="AJOUTERmedicamentHTML.php">
			<fieldset style="width: 25%">

				<h1>Ajout de Medicament </h1>
				<hr>

				<table>
					<ul>
						<tr>
							<td>code Medicament</td>
							<td><input type="text" name="code_medicament" value=""required></td>
						</tr>

						<tr>
							<td> Nom Medicament: </td>
							<td><input type="text" name="Nom_medicament" value=""required></td>
						</tr>
						<tr>
							<td>Description Medicament: </td>
							<td><input type="text" name="Description_medicament" value="" required></td>
						</tr>
						<tr>
							<td>prix  </td>
							<td><input type="number" name="prix" value=""required></td>
						</tr>

						<tr>
							<td>Quantite: </td>
							<td><input type="number" name="Quantite" value=""required></td>
						</tr>


						<tr>
							<td>Date Exper: </td>
							<td><input type="date" name="Date_exper"  required value="
							<!-- <?php 
							
							// $serveur="localhost";
							// $user="root";
							// $password="";
							// $base="bases_site";
							// $A=mysqli_connect($serveur,$user,$password,$base);
							//  date('y-m-d',strtotime('+2 MONTHS',time()));?>
							 "  -->
							></td>
						</tr>
                        <tr>
							<td>Type Medicament: </td>
							<td>
                            <select Name="Nom_Type">
                                    <?php
                                       $serveur="localhost";
                                       $user="root";
                                       $password="";
                                       $base="bases_site";
                                       $A=mysqli_connect($serveur,$user,$password,$base);
                                       $result=mysqli_query($A,"SELECT * FROM type_medicament");
                                       while($ligne=mysqli_fetch_row($result)){
                                           echo "<option value= '$ligne[0]' > $ligne[1]</option>";
                                       }
                                   ?>
                                    
                                </select>
                            </td>
						</tr>


						

						<tr>
						<td colspan="2"><input type="submit" class="input-submit" value="Enregistrer"></td>
						</tr>

				</table>
				</ul>



		</form>
	</center>

	</fieldset>
	</hr>

</body>

</html>


<?php
 if($_POST)
 {
// la partie connection 
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$sum= mysqli_connect($server,$user,$password,$base);
// la partie recuperation

$code_M=$_POST['code_medicament'];
$Nom_M=$_POST['Nom_medicament'];
$Description=$_POST['Description_medicament'];
$Prix=$_POST['prix'];
$Quantite=$_POST['Quantite'];
$Date_Exper=$_POST['Date_exper'];
  $Type =$_POST["Nom_Type"] ;
// la partie de recrutement
$a="INSERT INTO medicament values('$code_M','$Nom_M','$Description','$Prix','$Quantite','$Date_Exper','$Type')";
if(mysqli_query($sum,$a)){


	echo'<!DOCTYPE html>
  <html lang="en">
  
  <head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Document</title>
  </head>
  
  <body>
	  <style>
		  p {
			 
	          font-style: italic;
		       font-family: Verdana, Geneva, Tahoma, sans-serif;
		        color: #fbc02d;
			  text-align: center;
	          margin-top: 10px;
	           margin-left: 400px;
	     	   margin-right: 400px;
			   margin-bottom: 50px;
	 		   padding-right: 0px;
			   padding-bottom: 10px;
			   padding-left: 0px;
			   padding-top: 10px;
			   
	 		  box-shadow: 0em 0em 1em 1em #ffc107;
	 		  background-color: #f3e5f5;
			 
	 		 border-radius:  5em 5em 5em 5em;
		   
			 
		  }
	  </style>
	  <p>Votre demander est Enregistre avec SUCCEE ! <a href="AJOUTERmedicamentHTML.php">Fermer</a>
		  
	  </p>
   
  </body>
  
  </html>';
	
}


   else{
   echo("non reçue");
    
     }
	}
?>