<?php
/* Remplacer votre_adresse@mail.net par votre adresse mail
   Remplacer www.votre_domaine.net par votre nom de domaine */

$adresse = "mohamedtandia05@gmail.com";
$site = "www.gmail.com";

$TO = $adresse;

$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";

$sujet = "Formulaire de contact";

$informations = "
Nom: ".$_POST['realname']." \r\n
Email du formulaire: ".$_POST['email']." \r\n
Sujet du formulaire: ".$_POST['title']."\r\n
Message: ".$_POST['comments']." \r\n
";

$res = mail($TO, $sujet ,$informations, $head);

if (true == $res) {
	echo "Evoyer avec succes";
/*Header("Location: http://".$site."/formail2_ok.html" );*/
} else {
	echo "Noooooooooooooooooooo";
/*Header("Location: http://".$site."/formail2_pasok.html" );*/
}
?>


