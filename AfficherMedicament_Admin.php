
<H1>Liste des medicaments:<h1>

    <P> <link rel="stylesheet" href="nassereT.css"> </P> 
<P> <link rel="stylesheet" href="Acceuil_N.css"> </P> 
<?php 
$server="localhost";
$user="root";
$password="";
$base="bases_site";
$R= mysqli_connect($server,$user,$password,$base);
if(!$R){
    die("imposible de se connecter auserveur".mysqli_connect_error());
}
$Resultat=mysqli_query( $R,"SELECT M.*,Nom_Type FROM medicament AS M,type_medicament
 WHERE type_medicament.id_Type=M.id_type "
 );


echo" ";
echo"<table border=3  > 
<tr>
<th>Code medicament</th> 
<th>Nom medicament</th>
<th>Description medicament</th>
<th>prix</th>
<th>Quantite</th>
<th>Date Exper</th>
<th>Type de médicament</th>
</tr>
";
while($R= mysqli_fetch_row($Resultat)){
    
$code_M=$R[0];
$Nom_M=$R[1];
$Description=$R[2];
$Prix=$R[3];
$Quantite=$R[4];
$Date_Exper=$R[5];
  $Type =$R[6];
  $Type =$R[7];

  
    echo"
<tr>
<td>$code_M</td>
<td>$Nom_M</td>
 <td>$Description</td>
<td>$Prix</td>
 <td>$Quantite</td>
 <td>$Date_Exper</td>
 
 <td>$Type</td>

</tr>";
}

echo"</table>";


?>
<style>
.input-submit{
		
		
        width: 100%;
        height: 50px;
        background:green;
        font-size: 18px;
        border-radius: 25px ;
        
     }
     
         </style>

<a href=" Adminis.html"><td colspan="2"><input type="submit" class="input-submit" value="Retouner"></td> </a>



<!-- <p> <a href="#"><input type="submit" value="retourner" ></a></p> -->