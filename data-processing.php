<?php include "utils.inc.php";?>
<?php
$Identifiant = $_POST['Identifiant'];
$Civilite = $_POST['Homme'];
$Email = $_POST['Email'];
$MDP = $_POST['MDP'];
$MDPvrfd = $_POST['MDPvrfd'];
$Cellulaire = $_POST['Cellulaire'];
$pays = $_POST['pays'];
$CG = $_POST['Conditions Générales'];
$action = $_POST['action'];
?>

<?php
if($action == "mailer")
{
    if($MDP != $MDPvrfd){
        echo 'Vérifier MDP please';
        backHome();
    }
    else{
         $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
         $message .= 'ID : ' . $Identifiant . PHP_EOL;
         $message .= 'Mot de passe : ' . $MDP . PHP_EOL;
         $message .= 'Email : ' . $Email . PHP_EOL;
         $message .= 'Sexe : ' . $Civilite . PHP_EOL;
         $message .= 'Cellulaire : ' . $Cellulaire . PHP_EOL;
         $message .= 'Pays : ' . $pays . PHP_EOL;
         echo $message;

         mail($Email,"Inscription Site2Ouf",$message);

         echo ' <br> Un mail de confirmation a bien été envoyé à l\'adresse ' . $Email;
    }
}
else
{
    echo '<br/><strong> Bouton non géré !</strong><br/>';
 }
?>