<html>
<head>
</head>
<body>
<?php
require("connexion.php");

$Numfact=$_POST['Numfact'];

$resultat= mysqli_query($connexion,"DELETE FROM `facture`
WHERE  Numfact = '$NumFact' ");

if ($resultat) echo "suppression effectué";
else echo "suppression non effectué !";

?>	
</body>
</html>
