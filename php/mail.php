<?php

header('content-type: text/html; charset=UTF-8');
//Dieser header-Befehl sorgt dafür, dass Umlaute innerhalb des Nachrichtentextbereichs (textarea) korrekt dargestellt werden.
//Definition der Variablen:
$vname = $_POST ['vname'] ;
$email = $_POST ['email'] ;
$phone = $_POST ['phone'] ;
$message = $_POST ['message'] ;
//Hier folgt die Definition der Position der einzufÃ¼genden Variableninhalte innerhalb der E-Mail:
$an = 'sushikoi@gmx.de' ;
$betreff = 'Webformular-Nachricht' ;
$nachricht = "
Nachricht über das Website-Kontaktformular: \n
Absender: $vname \n
E-Mail: $email \n
Telefon: $phone \n\n
Nachricht:\n
$message" ;
//Hier folgt der eigentliche Hauptbefehl, d.h. der Inhalt wird vom Webserver per E-Mail gesendet.
mail($an, $betreff, $nachricht, "From:" . $email);
//Rückmeldetext an den Absender, dass das Formular versendet wurde:
echo 'Ihre Nachricht wurde erfolgreich gesendet. Sie werden baldmöglichst eine Antwort erhalten. <a href="index.html">Zurück zum Formular...</a>' ;

?>