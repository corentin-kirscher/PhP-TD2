<?php include 'utils.inc.php' ?>
<?php
$Login = $_POST['Login'];
$Password = $_POST['Password'];
$Step = $_GET['step'];
?>

<?php
        $dbLink = mysqli_connect("mysql-kirscherco.alwaysdata.net", 144379,12345678 )
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
?>
<?php
        mysqli_select_db($dbLink , "kirscherco_php")
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>
<?php
        $query = 'SELECT Password FROM USER WHERE User_Name = \'' . $Login  .'\' ';
        $result = mysqli_query($dbLink,$query);
        $row = mysqli_fetch_assoc($result);
?>

<?php
if($Password == $row['Password'] && $Login != null){
    header("Location: login.php?step=GoodBoi");
}
else{
    header("Location: login.php?step=ERROR");
}
?>


