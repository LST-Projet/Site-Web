<?php
require('config.php');
 if (isset($_POST['envoyer'])) {
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$email=$_POST["email"];
$tele=$_POST["tele"];
$message=$_POST["message"];

$stm=$conn->prepare("INSERT INTO contact (prenom,nom,email,tele,message) values(?,?,?,?,?)");
$stm->execute([
$prenom,
$nom,
$email,
$tele,
$message]
);

echo "Contact with success";

}

else{
	echo "Error Contact";
}




 	?>