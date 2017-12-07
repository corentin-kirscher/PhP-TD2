<?php include 'utils.inc.php';
?>
<?php start_page(td2);
?>
<?php
    echo getenv('REMOTE_ADDR'); ?> <br>
<?php
    echo getenv('HTTP_HOST'); ?> <br><br>
<form action="data-processing.php" method="post"
    <p> Petit formulaire de bienvenue kamarad</p>
    <input type="text" name="Identifiant" value="Id please"/> <br>
        <p>LE SEXE PLEASE</p>
    <input type="radio" name="Civilité"/> Homme<br>
    <input type="radio" name="Civilité"/> Femme<br>
    <input type="radio" name="Civilité"/> Transgenre<br>
    <input type="radio" name="Civilité"/> Neutre<br>
    <input type="radio" name="Civilité"/> skoliosexuel<br>
    <input type="radio" name="Civilité"/> pansexuel<br>
    <input type="radio" name="Civilité"/> asexuel<br><br>
    <input type="email" name="Email" /> Email<br><br>
    <input type="password" name="MDP"/> MDP<br><br>
    <input type="password" name="MDPvrfd"/> Vérification MDP<br><br>
    <input type="text" name="Cellulaire"/> Cellulaire<br><br>
    <select name="pays" >
        <option value="France">France</option>
        <option value="Espagne">Espagne</option>
        <option value="Allemagne">Allemagne</option>
        <option value="Angleterre">Angleterre</option>
        <option value="Italie">Italie</option>
        <option value="Vatican">Vatican</option>
        <option value="Ardèche">Ardèche</option>
        </select><br> <br>
<input type="checkbox" name="conditionsGénérales"/>En cliquant ici vous acceptez les <i>Conditions Générales</i><br><br>
    <input type="submit" name="action" value="mailer"/>
<?php end_page() ?>
