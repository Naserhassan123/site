 


<P> <link rel="stylesheet" href="nassereT.css"> </P>
<!-- <P> <link rel="stylesheet" href="Acceuil_N.css"> </P> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- <div class="container"> -->
        <!-- <div class="row"> -->
            <!-- <nav class="navbar" >
                <h1>LOGO</h1>
                <ul>
                    <li> <a href="Accueil_N.html"> HOME </a> </li>
                    <li> <a href="connexionphp_incription.php"> CONNEXION </a> </li>
                    <li> <a href="connexion_Admin.html">ADMINISTRATEUR</a> </li>
                    <li> <a href="#"> CONTACT </a> </li>
                </ul>
                
            </nav> -->
            <!-- <div class="content">
                <h1> Pharmacie de 100ans</h1>
                <p>Votre santé est votre priorité ! </p>
                <a href="Inscription.html">Inscrivez-vous gatuitement</a>
            </div>
            <section>
                <div class="bienvenue">
              
                <strong><h1><center><marquee behavior="" direction="left" width="40%" >BIENVENUE SUR NOTRE PHARMACIE</marquee></center></h1></strong>r
            </div> -->
            <!-- </section> -->
        
    <!-- </div> -->
</body>
</html>
<?php
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$R=mysqli_connect('localhost','root','','bases_site');

 $Nom_M=$_POST['Nom_medicament'];

$Resultat=( "SELECT `code_medicament`, `Nom_medicament`, `Description_medicament`, `prix`, `Quantite`, `Date_exper`, Nom_Type FROM `medicament`,type_medicament
 WHERE type_medicament.id_Type=medicament.id_Type 
 AND Nom_medicament='$Nom_M'");
 $affiche=$R->query($Resultat);
 $num=mysqli_num_rows($affiche);
 
if ($num>0) {
	echo "<table border=2  ><tr><th>code_medicament</th> <th> Nom_medicament</th> <th> Description_medicament</th></th><th>prix</th><th>Quantite_medicament<th>date_exper</th><th>Nom_Type</th>";
	while ($rows=mysqli_fetch_assoc($affiche)) {
		$num=$rows['code_medicament'];
		$nom=$rows['Nom_medicament'];
		$Description=$rows['Description_medicament'];
        $Prix=$rows['prix'];
		$Quantite=$rows['Quantite'];
		
		$date_exp=$rows['Date_exper'];
		$Nom_type=$rows['Nom_Type'];
		
		echo "<tr><td>",$num,"</td><td>",$nom,"</td> <th>",$Description,"</th><td>",$Quantite,"</td><td>",$Prix,"</td><td>",$date_exp,"</td><td>",$Nom_type,"</td><td></td></tr>";
	}
     echo "</table>";
}
else{
	echo "0 resultat";
}
?>
<div> 
    <style>
        
		div{ 
			margin-left: 300px;
		margin-right: 800px;
		margin-top: 10px;
		margin-bottom: 50px;
	}
		
			.input_box{
   position: relative;
   display: flex;
   
  
}
		
	.input-submit{
		
		
   width: 100%;
   height: 50px;
   background:rgb(34, 9, 195);
   font-size: 18px;
   border-radius: 25px ;
   
}

    </style>
<a href="Ordonnancement.HTML"><td colspan="2"><input type="submit" class="input-submit" value="Achetez"></td> </a>

</div class="input_box">
