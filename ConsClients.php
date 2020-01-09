</head>
<body>
<div align="center">
<h1>Interrogation de la table client</h1>
<?php
require("connexion.php");
$resultat=mysqli_query($connexion ,"select * from client");
$max=mysqli_query($connexion ,"select max(NumCli) from client");

$max += 4;
echo "max = $max";
if ($resultat)
{
	echo "<h2>Contenue de la table Client</h2><br><br>\n";
	echo "<u>Num</u>  <u>Nom</u><br>\n";
  // Lecture du cursseur contenant les lignes résultantes de la requête
	while ($client=mysqli_fetch_assoc($resultat))
		echo "$client[NumCli]  $client[NomCli] <br>\n";
  // Libération de l’espace mémoire occupé par le cursseur
  mysqli_free_result($resultat);
}


else {
	echo "requête non exécutée correctement !";
}

echo "<a href=\"index.html\">retour</a>";
?>	
</div>
</body>
</html>
