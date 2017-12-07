<?php
$Identifiant = $_POST['Identifiant'];
$Civilite = $_POST['Civilite'];
$Email = $_POST['Email'];
$MDP = $_POST['MDP'];
$MDPvrfd = $_POST['Verification MDP'];
$Cellulaire = $_POST['Cellulaire'];
$pays = $_POST['pays'];
$CG = $_POST['Conditions Générales'];
$action = $_POST['action'];

?>

<?php
if($action == 'mailer'  )
{
 $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
 $message .= 'Email : ' . $Email . PHP_EOL;
 $message .= 'ID : ' . $Identifiant . PHP_EOL;
 $message .= 'Mot de passe : ' . $MDP . PHP_EOL;
 $message .= 'Sexe : ' . $Civilite . PHP_EOL;
 $message .= 'Cellulaire : ' . $Cellulaire . PHP_EOL;
 $message .= 'Pays : ' . $pays . PHP_EOL;
 echo $message;
}
else
{
    echo '<br/><strong> Bouton non géré !</strong><br/>';
 }
?>