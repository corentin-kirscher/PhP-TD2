<?php
$dbLink = mysqli_connect("mysql-kirscherco.alwaysdata.net", 144379,12345678 )
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>
<?php
mysqli_select_db($dbLink , "kirscherco_php")
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>
<?php
$query = '
INSERT INTO `USER`(`ID`, `User_Name`, `Password`, `Sex`, `Email`, `Phone`, `Pays`, `Date_insc`)
VALUES (NULL ,"Bonjour","123456789","Neutre","nan@oui.fr","5632124589","France",CURRENT_DATE)';
?>
<?php
if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
else{
    echo 'oui';
}
?>

