

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <P> <link rel="stylesheet" href="nassereT.css"> </P> 
<P> <link rel="stylesheet" href="Acceuil_N.css"> </P> 

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
</body>
</html>
<?php 
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$R= mysqli_connect($server,$user,$password,$base);
if(!$R){
    die("imposible de se connecter auserveur".mysqli_connect_error());
}
$Resultat=mysqli_query( $R,"SELECT * FROM commande  "
 );


echo" ";
echo"<table border=3  > 
<tr>
<th>id_Commande</th> 

<th>Description</th> 
<th>Date</th>
<th>Choix</th>
<th>Email</th>
</tr>
";
while($R= mysqli_fetch_row($Resultat)){
$code_C=$R[0];
$DES_C=$R[1];
$DATE_C=$R[2];
$Choix_C=$R[3];
$Email=$R[4];

    echo"
<tr>
<td>$code_C</td>
<td>$DES_C</td>
 <td>$DATE_C</td>
<td>$Choix_C</td>
<td>$Email</td>
</tr>";
}

echo"</table>";


?>
