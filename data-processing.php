<?php include "utils.inc.php";?>
<?php
$Identifiant = $_POST['Identifiant'];
$Civilite = $_POST['sexe'];
$Email = $_POST['Email'];
$MDP = $_POST['MDP'];
$MDPvrfd = $_POST['MDPvrfd'];
$Cellulaire = $_POST['Cellulaire'];
$pays = $_POST['pays'];
$CG = $_POST['Conditions Générales'];
$action = $_POST['action'];
$today = date('Y-m-d');
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

         echo ' <br> Un mail de confirmation a bien été envoyé à l\'adresse ' . $Email;?>

        <?php
        $dbLink = mysqli_connect("mysql-kirscherco.alwaysdata.net", 144379,12345678 )
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        ?>
        <?php
        mysqli_select_db($dbLink , "kirscherco_php")
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
        ?>
        <?php
        $query = 'INSERT INTO USER (User_name, Password, Sex, Email, Phone, Pays, Date_insc) VALUES 
        (\'' . $Identifiant . '\', \'' . $MDP . '\', \'' . $Civilite . '\', \'' . $Email . '\', \'' . $Cellulaire
            . '\', \'' . $pays. '\', NOW())';

        if(!($dbResult = mysqli_query($dbLink, $query)))
        {
            echo 'Erreur de requête<br/>';
            // Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            // Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

    }
}
else
{
    echo '<br/><strong> Bouton non géré !</strong><br/>';
 }
?>

