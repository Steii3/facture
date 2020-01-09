<html>
<head>
</head>
<body>
<?php
require("connexion.php");

$NumCli=$_POST['NumCli']; $NomCli=$_POST['NomCli'];

$resultat=mysqli_query($connexion,"insert into client values($NumCli,'$NomCli')");
if ($resultat) echo "Ajout effectué";
else echo "Ajout non effectué !";
?>	
</body>
</html>
